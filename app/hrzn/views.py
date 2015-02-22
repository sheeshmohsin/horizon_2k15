import os
import hrzn
import urllib
import urllib2

from django.contrib import messages
from django.conf import settings
from django.shortcuts import render_to_response
from hrzn.forms import *
from hrzn.models import *
from django.core.context_processors import csrf
from django.template import RequestContext
from django.http import HttpResponseRedirect, HttpResponse
from django.core.mail import send_mail
from django.core.files import File
from django.core.mail import EmailMultiAlternatives
from django.template.loader import get_template
from django.conf import settings
from django.template import Context
from django.contrib.auth.decorators import login_required
# Create your views here.

def home(request):
    central_events = Foreveryone.objects.all()
    cse_events = Cseit.objects.all()
    ece_events = Ece.objects.all()
    eie_events = Eie.objects.all()
    ee_events = Ee.objects.all()
    me_events = Me.objects.all()
    ce_events = Ce.objects.all()
    gaming_events = Gaming.objects.all()
    gallery = Gallery.objects.all()
    return render_to_response('basic.html', {'central_events':central_events, 'cse_events':cse_events,
        'ece_events':ece_events, 'eie_events':eie_events, 'ee_events':ee_events, 'me_events':me_events,
        'ce_events':ce_events, 'gaming_events':gaming_events, 'gallery':gallery }, context_instance=RequestContext(request))

def youtube(request):
    return render_to_response('youtube.html')

@login_required
def profile(request):
    if len(request.user.registration_set.all()) == 1:
        obj = request.user.registration_set.all()[0]
        return render_to_response('profile.html', {'form':Registrationformins(instance=obj)}, context_instance=RequestContext(request))
    else:
        return render_to_response('profile.html', {'form':Registrationform()}, context_instance=RequestContext(request))

@login_required
def profileform(request):
    if request.method=='POST':
        if len(request.user.registration_set.all()) == 10:
            return HttpResponseRedirect('/limitedsubmission/')
        field_list = ['csrfmiddlewaretoken']
        include_field_list = ['foreveryone', 'cseit', 'ece', 'eie', 'ee', 'me', 'ce', 'gaming']
        other_field_list = ['name', 'phonenumber', 'college']
        finaldict = dict()
        if len(request.user.registration_set.all()) == 1:
            fobj = request.user.registration_set.all()[0]
            form = Registrationformins(request.POST, instance=fobj)
        else:
            form = Registrationform(request.POST)
        print request.POST
        if form.is_valid():
            f = form.save(commit=False)
            f.user = request.user
            mydict = dict(request.POST.iterlists())
            sum_college = 0
            sum_another_college = 0
            for key, value in mydict.items():
                print key, value
                if key not in field_list:
                    if key in other_field_list:
                        finaldict[key] = value
                    else:
                        if key in include_field_list:
                            model = getattr(hrzn.models, key.title())
                            event_list = []
                            print key, value
                            for val in value:
                                print val
                                obj = model.objects.get(id=val)
                                event_title = obj.event_name
                                event_charge = obj.event_charge
                                event_charge_others = obj.event_charge_others
                                if key == 'foreveryone':
                                    pass
                                else:
                                    sum_college = sum_college + int(event_charge)
                                    sum_another_college = sum_another_college + int(event_charge_others)
                                if event_title == '#include<Wannacode.h>':
                                    event_list.append('wannacode.h')
                                else:
                                    event_list.append(event_title)
                            value = event_list
                            finaldict[key] = value
                        finaldict[key] = value
            finaldict['Charge for BCREC'] = int(sum_college) + 30
            finaldict['Charge for Others'] = int(sum_another_college) + 50
            print finaldict
            image_url = "http://chart.apis.google.com/chart?cht=qr&chs=230x230&chl=%s" % finaldict
            image = urllib.urlretrieve(image_url)
            f.qr_code = File(open(image[0]))
            f.save()
            form.save_m2m()
            plaintext = get_template('qrcode.txt')
            file_url = str(request.user.registration_set.all().order_by('-id')[0].qr_code)
            # msg.attach_file(urllib2.urlopen())
            d = Context({"name":request.user.first_name, "url":os.path.join("https://%s/" % settings.AWS_S3_CUSTOM_DOMAIN, file_url)})
            text_content = plaintext.render(d)
            msg = EmailMultiAlternatives('Registration', text_content, 'registration@horizonbcrec.in', [request.user.email])
            msg.send()
            return HttpResponseRedirect('/thankyou/')
        else:
            return render_to_response('profile.html', {'form':form}, context_instance=RequestContext(request))
    else:
        return HttpResponseRedirect('/profile/')
# http://chart.apis.google.com/chart?cht=qr&chs=230x230&chl={}

@login_required
def limited(request):
    return render_to_response('limitedaccess.html')

@login_required
def thankyou(request):
    return render_to_response('thankyou.html', context_instance=RequestContext(request))

@login_required
def treasurehunt(request):
    answerset = request.user.crypto_set.all()
    if len(answerset) == 0:
        template_name = 'crypto/first.html'
    elif len(answerset) == 1:
        template_name = 'crypto/second.html'
    elif len(answerset) == 2:
        template_name = 'crypto/third.html'
    elif len(answerset) == 3:
        template_name = 'crypto/fourth.html'
    elif len(answerset) == 4:
        template_name = 'crypto/five.html'
    elif len(answerset) == 5:
        template_name = 'crypto/sixth.html'
    elif len(answerset) == 6:
        template_name = 'crypto/seventh.html'
    elif len(answerset) == 7:
        template_name = 'crypto/eighth.html'
    elif len(answerset) == 8:
        template_name = 'crypto/ninth.html'
    elif len(answerset) == 9:
        template_name = 'crypto/tenth.html'
    return render_to_response(template_name, context_instance=RequestContext(request))

@login_required
def treasureanswer(request):
    qno = request.POST["qno"]
    answer = request.POST["answer"]
    if answer == Crypto_answer.objects.get(qno=qno).answer:
        a = Crypto(user=request.user, qno=qno, answer=answer)
        a.save()
        messages.info(request, 'Congo! Correct Answer')
        return HttpResponseRedirect('/treasurehunt/')
    else:
        messages.warning(request, 'Wrong Answer')
        return HttpResponseRedirect('/treasurehunt/')
