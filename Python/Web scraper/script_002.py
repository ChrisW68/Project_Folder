#Openwebpage
import urllib2
from bs4 import BeautifulSoup

webpage = urllib2.urlopen( \
    "http://inadaybooks.com/justiceleague")

soup = BeautifulSoup(webpage)
print soup.title

divContainer = soup.find("div", {"id":"container"})
print divContainer

divBlock = divContainer.findAll("div", \
                                {"class":"block"})
print divBlock[3]
