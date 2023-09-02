from urllib import request
from django.shortcuts import render

def button(request):
    return render(request,'home.html')
def output():
    data="Iniyan"
    print(data)
    # return render(request,'home.html')