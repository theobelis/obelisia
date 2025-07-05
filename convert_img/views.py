# convert_img/views.py
from django.shortcuts import render

def convert_img_view(request):
    return render(request, 'convert_img/convert.html')