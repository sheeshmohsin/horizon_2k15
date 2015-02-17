from django import forms
from hrzn.models import *

class Registrationformins(forms.ModelForm):

    class Meta:
        # Set this form to use the Areas Model
        model = Registration
        
        # exclude these fields
        exclude = ('paid','user', 'qr_code')

    def __init__(self, *args, **kwargs):
        super(Registrationformins, self).__init__(*args, **kwargs)
        self.fields['name'].widget.attrs.update({'placeholder': 'Participant Name'})
        self.fields['name'].widget.attrs['readonly'] = True
        self.fields['phonenumber'].widget.attrs.update({'placeholder': 'Phone Number'})
        self.fields['college'].widget.attrs.update({'placeholder': 'College Name'})
        for field_name in self.fields:
            field = self.fields.get(field_name)
            if field:
                field.widget.attrs.update({
                    'class': 'form-control'
                    })

class Registrationform(forms.ModelForm):

    class Meta:
        # Set this form to use the Areas Model
        model = Registration
        
        # exclude these fields
        exclude = ('paid','user', 'qr_code')

    def __init__(self, *args, **kwargs):
        super(Registrationform, self).__init__(*args, **kwargs)
        self.fields['name'].widget.attrs.update({'placeholder': 'Participant Name'})
        self.fields['phonenumber'].widget.attrs.update({'placeholder': 'Phone Number'})
        self.fields['college'].widget.attrs.update({'placeholder': 'College Name'})
        for field_name in self.fields:
            field = self.fields.get(field_name)
            if field:
                field.widget.attrs.update({
                    'class': 'form-control'
                    })
