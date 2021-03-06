from django.conf.urls.defaults import patterns, include, url
from django.conf import settings
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',

    url(r'^$', 'newsfeed.views.dashboard'),
    url(r'^defects/', include('issues.urls')),
    url(r'^chats/', include('chats.urls')),
    url(r'^projects/', include('projects.urls')),
    url(r'^browser/', include('browser.urls')),
    url(r'^users/', include('profile.urls')),
    url(r'^forums/', include('forum.urls')),
    url(r'^wiki/', include('wiki.urls')),
    url(r'^grappelli/', include('grappelli.urls')),
    url(r'^accounts/login/$', 'django.contrib.auth.views.login', {'template_name': 'profile/login.html'}),
    url(r'^accounts/logout/$', 'django.contrib.auth.views.logout', name="logout"),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^static/(?P<path>.*)$', 'django.views.static.serve',
        {'document_root': settings.STATIC_ROOT}),
    url(r'^media/(?P<path>.*)$', 'django.views.static.serve',
        {'document_root': settings.MEDIA_ROOT}),
)