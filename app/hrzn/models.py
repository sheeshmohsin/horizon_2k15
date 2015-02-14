from django.db import models
from django.utils.translation import ugettext_lazy as _
from django.contrib.auth.models import User
from hrzn.utils import get_upload_file_path

# Create your models here.

class Foreveryone(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Foreveryone'

	def __unicode__(self):
		return self.event_name

class Cseit(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Cseit'

	def __unicode__(self):
		return self.event_name

class Ece(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Ece'

	def __unicode__(self):
		return self.event_name

class Eie(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Eie'

	def __unicode__(self):
		return self.event_name

class Ee(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Ee'

	def __unicode__(self):
		return self.event_name

class Me(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Me'

	def __unicode__(self):
		return self.event_name

class Ce(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Ce'

	def __unicode__(self):
		return self.event_name

class Gaming(models.Model):
	event_name = models.CharField(_('Event Name'), max_length=40)
	event_charge = models.CharField(_('Event Charge'), max_length=15)
	event_charge_others = models.CharField(_('Event Charge For Other Colleges'), max_length=15)
	description = models.TextField(_('Description'), blank=True)
	mentor_name = models.CharField(_('Mentor Name'), max_length=40, null=True, blank=True)
	mentor_email = models.EmailField(_('Mentor Email'), max_length=60, null=True, blank=True)
	mentor_number = models.CharField(_('Mentor Phone Number'), max_length=10, null=True, blank=True)
	mentor_pic = models.ImageField(upload_to=get_upload_file_path, null=True, blank=True)

	class Meta:
		verbose_name_plural = 'Gaming'

	def __unicode__(self):
		return self.event_name

class Registration(models.Model):
	user = models.ForeignKey(User)
	name = models.CharField(_('Name'), max_length=40)
	phonenumber = models.CharField(_('Phone Number'), max_length=10)
	college = models.CharField(_('College Name'), max_length=50)
	foreveryone = models.ManyToManyField(Foreveryone, blank=True)
	cseit = models.ManyToManyField(Cseit, blank=True)
	ece = models.ManyToManyField(Ece, blank=True)
	eie = models.ManyToManyField(Eie, blank=True)
	ee = models.ManyToManyField(Ee, blank=True)
	me = models.ManyToManyField(Me, blank=True)
	ce = models.ManyToManyField(Ce, blank=True)
	gaming = models.ManyToManyField(Gaming, blank=True)
	paid = models.BooleanField(default=False)
	qr_code = models.FileField(upload_to=get_upload_file_path)

	class Meta:
		verbose_name_plural = 'Registration'

	def __unicode__(self):
		return self.name
