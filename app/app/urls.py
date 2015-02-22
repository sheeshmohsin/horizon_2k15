from django.conf.urls import patterns, include, url
from django.conf.urls.static import static
from django.conf import settings
# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'hrzn.views.home', name='home'),
    url(r'^youtube/$', 'hrzn.views.youtube', name='youtube'),
    url(r'^profile/$', 'hrzn.views.profile', name='profile'),
    url(r'^profileform/$', 'hrzn.views.profileform', name='profileform'),
    url(r'^limitedsubmission/$', 'hrzn.views.limited', name='limited'),
    url(r'^thankyou/$', 'hrzn.views.thankyou', name='thankyou'),
    url(r'^treasurehunt/$', 'hrzn.views.treasurehunt', name='treasurehunt'),
    url(r'^treasure/answer/$', 'hrzn.views.treasureanswer', name='treasureanswer'),
    url(r'^accounts/logout/$', 'django.contrib.auth.views.logout', {'next_page': '/'}),
    # url(r'^app/', include('app.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
    url(r'^accounts/', include('allauth.urls')),
    url(r'^avatar/', include('avatar.urls')),	
) + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
