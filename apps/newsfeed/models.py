from django.db import models
from django.contrib.auth.models import User
from projects.models import App
from defects.models import Defect


class Activity(models.Model):
    user = models.ForeignKey(User)
    action = models.CharField(max_length=400)
    application = models.ForeignKey(App, blank=True, null=True)
    defect = models.ForeignKey(Defect, blank=True, null=True)
    date_action = models.DateTimeField(auto_now=True, auto_now_add=True)
    
    def __unicode__(self):
        return "%s %s" % (self.user.username, self.action)


    class Meta:
        ordering = ['-date_action']