# Django settings for app project.
import os
from os.path import join

BASE_DIR = os.path.dirname(os.path.dirname(__file__))

DEBUG = True
TEMPLATE_DEBUG = DEBUG

ADMINS = (
    # ('Your Name', 'your_email@example.com'),
)

MANAGERS = ADMINS

# # Database
# # https://docs.djangoproject.com/en/1.6/ref/settings/#databases
# # DATABASES = values.DatabaseURLValue('postgres://animate_web@localhost/animate_web')
# DATABASES = {
#     'default': {
#         'ENGINE': 'django.db.backends.mysql',
#         #'NAME': normpath(join(DJANGO_ROOT,'hotelnow')), # for sqllite
#         'NAME': 'horizon',
#         'USER': 'sheeshmohsin',
#         'PASSWORD': 'sheeshmohsin',
#         'HOST': 'sheeshmohsin.cklrsxrygcj7.us-west-2.rds.amazonaws.com',
#         'PORT': '3306',
#     }
# }
# # END DATABASE CONFIGURATION
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': os.path.join(BASE_DIR, 'db.sqlite3'),
    }
}



TEMPLATE_DIRS = (
    os.path.join(BASE_DIR, 'templates'),
)

# Hosts/domain names that are valid for this site; required if DEBUG is False
# See https://docs.djangoproject.com/en/1.5/ref/settings/#allowed-hosts
ALLOWED_HOSTS = ['*']

# Local time zone for this installation. Choices can be found here:
# http://en.wikipedia.org/wiki/List_of_tz_zones_by_name
# although not all choices may be available on all operating systems.
# In a Windows environment this must be set to your system time zone.
TIME_ZONE = 'Asia/Calcutta'

# Language code for this installation. All choices can be found here:
# http://www.i18nguy.com/unicode/language-identifiers.html
LANGUAGE_CODE = 'en-us'

SITE_ID = 1

# If you set this to False, Django will make some optimizations so as not
# to load the internationalization machinery.
USE_I18N = True

# If you set this to False, Django will not format dates, numbers and
# calendars according to the current locale.
USE_L10N = True

# If you set this to False, Django will not use timezone-aware datetimes.
USE_TZ = True

# Static files (CSS, JavaScript, Images)
# https://docs.djangoproject.com/en/1.6/howto/static-files/

STATIC_URL = '/static/'

STATICFILES_DIRS = (
    os.path.join(BASE_DIR, 'static'),
)

STATIC_ROOT = join(BASE_DIR, 'staticfiles')

# MEDIA CONFIGURATION
# See: https://docs.djangoproject.com/en/dev/ref/settings/#media-root
# MEDIA_ROOT = join(BASE_DIR, 'media')

# List of finder classes that know how to find static files in
# various locations.
STATICFILES_FINDERS = (
    'django.contrib.staticfiles.finders.FileSystemFinder',
    'django.contrib.staticfiles.finders.AppDirectoriesFinder',
#    'django.contrib.staticfiles.finders.DefaultStorageFinder',
)

# Make this unique, and don't share it with anybody.
SECRET_KEY = '386ihj$f3bc=cvp0nt@ly5_^6ql_pc03y6-@6v-3o-sus^10g4'



MIDDLEWARE_CLASSES = (
    'django.middleware.common.CommonMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    # Uncomment the next line for simple clickjacking protection:
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
    'django_user_agents.middleware.UserAgentMiddleware',
)

AUTHENTICATION_BACKENDS = (
    "django.contrib.auth.backends.ModelBackend",
    "allauth.account.auth_backends.AuthenticationBackend",
)

ROOT_URLCONF = 'app.urls'

# Python dotted path to the WSGI application used by Django's runserver.
WSGI_APPLICATION = 'app.wsgi.application'

INSTALLED_APPS = (
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.sites',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'hrzn',
    # Uncomment the next line to enable the admin:
    'django.contrib.admin',
    # Uncomment the next line to enable admin documentation:
    'django.contrib.admindocs',
    'allauth',  # registration
    'allauth.account',  # registration
    'allauth.socialaccount',  # registration
    'allauth.socialaccount.providers.google',
    'bootstrap3',
    'avatar',
    'django_user_agents',
    #'storages',
)

# # List of callables that know how to import templates from various sources.
# TEMPLATE_LOADERS = (
#     'django.template.loaders.filesystem.Loader',
#     'django.template.loaders.app_directories.Loader',
# #     'django.template.loaders.eggs.Loader',
# )

# TEMPLATE_CONTEXT_PROCESSORS = (
#     "django.core.context_processors.request",
#     "allauth.account.context_processors.account",
#     "django.contrib.auth.context_processors.auth",
#     "allauth.socialaccount.context_processors.socialaccount",
# )

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [os.path.join(BASE_DIR,'templates')],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',

                
                # `allauth` needs this from django
                'django.template.context_processors.request',
                 # allauth specific context processors
                #"allauth.account.context_processors.account",
                #"allauth.socialaccount.context_processors.socialaccount",
            ],
        },
    },
]







SOCIALACCOUNT_PROVIDERS = \
{ 'google':
    { 'SCOPE': ['profile', 'email'],
      'AUTH_PARAMS': { 'access_type': 'online' } }}

LOGIN_REDIRECT_URL = '/'

ACCOUNT_AUTHENTICATION_METHOD = "email" # Defaults to username_email
ACCOUNT_USERNAME_REQUIRED = False       # Defaults to True
ACCOUNT_EMAIL_REQUIRED = True           # Defaults to False
SOCIALACCOUNT_QUERY_EMAIL = ACCOUNT_EMAIL_REQUIRED
SOCIALACCOUNT_AUTO_SIGNUP = True
SOCIALACCOUNT_EMAIL_REQUIRED = True

SESSION_SERIALIZER = 'django.contrib.sessions.serializers.JSONSerializer'

########## EMAIL CONFIGURATION
EMAIL_BACKEND = 'django.core.mail.backends.smtp.EmailBackend'
DEFAULT_FROM_EMAIL = 'registration@horizonbcrec.in'
EMAIL_HOST = 'smtp.zoho.com'
EMAIL_HOST_PASSWORD = 'sheeshmohsin'
EMAIL_HOST_USER = 'registration@horizonbcrec.in'
EMAIL_PORT = 587
EMAIL_USE_TLS = True
# ########## END EMAIL CONFIGURATION

# AWS_STORAGE_BUCKET_NAME = 'horizonbcrec'
# AWS_ACCESS_KEY_ID = 'AKIAIX5TIQDAWYS4ID6A'
# AWS_SECRET_ACCESS_KEY = '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'
# AWS_S3_CUSTOM_DOMAIN = '%s.s3.amazonaws.com' % AWS_STORAGE_BUCKET_NAME

# See: https://docs.djangoproject.com/en/dev/ref/settings/#media-url
MEDIA_URL = '/media/'
#MEDIA_URL = "https://%s/" % AWS_S3_CUSTOM_DOMAIN
# END MEDIA CONFIGURATION

DEFAULT_FILE_STORAGE = 'storages.backends.s3boto.S3BotoStorage'

# A sample logging configuration. The only tangible logging
# performed by this configuration is to send an email to
# the site admins on every HTTP 500 error when DEBUG=False.
# See http://docs.djangoproject.com/en/dev/topics/logging for
# more details on how to customize your logging configuration.
LOGGING = {
    'version': 1,
    'disable_existing_loggers': False,
    'filters': {
        'require_debug_false': {
            '()': 'django.utils.log.RequireDebugFalse'
        }
    },
    'handlers': {
        'mail_admins': {
            'level': 'ERROR',
            'filters': ['require_debug_false'],
            'class': 'django.utils.log.AdminEmailHandler'
        }
    },
    'loggers': {
        'django.request': {
            'handlers': ['mail_admins'],
            'level': 'ERROR',
            'propagate': True,
        },
    }
}
