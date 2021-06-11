from django.shortcuts import render
from .hello import add

def function(request):
    return render(request, "function.html", {'soma' : add(1,2)})



