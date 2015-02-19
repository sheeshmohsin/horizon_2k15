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

class Gallery(models.Model):
	caption = models.CharField(_('Caption'), max_length=30)
	picture = models.ImageField(_('Image'), upload_to=get_upload_file_path)

	class Meta:
		verbose_name_plural = 'Gallery'

	def __unicode__(self):
		return self.caption

class Registration(models.Model):
	DEPT_CHOICES = (
		('CSE 1st year', 'CSE 1st year'),
		('CSE 2nd year', 'CSE 2nd year'),
		('CSE 3rd year', 'CSE 3rd year'),
		('CSE 4th year', 'CSE 4th year'),
		('IT 1st year', 'IT 1st year'),
		('IT 2nd year', 'IT 2nd year'),
		('IT 3rd year', 'IT 3rd year'),
		('IT 4th year', 'IT 4th year'),
		('ECE 1st year', 'ECE 1st year'),
		('ECE 2nd year', 'ECE 2nd year'),
		('ECE 3rd year', 'ECE 3rd year'),
		('ECE 4th year', 'ECE 4th year'),	
		('EE 1st year', 'EE 1st year'),
		('EE 2nd year', 'EE 2nd year'),
		('EE 3rd year', 'EE 3rd year'),
		('EE 4th year', 'EE 4th year'),
		('EIE 1st year', 'EIE 1st year'),
		('EIE 2nd year', 'EIE 2nd year'),
		('EIE 3rd year', 'EIE 3rd year'),
		('EIE 4th year', 'EIE 4th year'),
		('ME 1st year', 'ME 1st year'),
		('ME 2nd year', 'ME 2nd year'),
		('ME 3rd year', 'ME 3rd year'),
		('ME 4th year', 'ME 4th year'),
		('CE 1st year', 'CE 1st year'),
		('CE 2nd year', 'CE 2nd year'),
		('CE 3rd year', 'CE 3rd year'),
		('CE 4th year', 'CE 4th year'),
		('BCA', 'BCA'),
		('MCA', 'MCA'),
		('Others', 'Others'),
	)
	user = models.ForeignKey(User)
	name = models.CharField(_('Name'), max_length=40, help_text="Be careful while entering name, user can't edit their names later")
	phonenumber = models.CharField(_('Phone Number'), max_length=10)
	college = models.CharField(_('College Name'), max_length=50)
	dept = models.CharField(_('Department/Year'), max_length=15, choices=DEPT_CHOICES)
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
