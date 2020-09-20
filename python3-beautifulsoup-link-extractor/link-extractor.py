from bs4 import BeautifulSoup
import sys
import urllib.request
import json

# Prep the request
url = sys.argv[1]
req = urllib.request.Request(
    url,
    data=None,
    headers={
        'User-Agent': 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:80.0) Gecko/20100101 Firefox/80.0'
    }
)

# Get the site
f = urllib.request.urlopen(req)
content = f.read().decode('utf-8')

# Parse the content
soup = BeautifulSoup(content, "html.parser")

data = []
for link in soup.find_all('a'):
    data.append({
        'href': link.get('href'),
        'title': link.get('title'),
        'rel': link.get('rel'),
        'target': link.get('target'),
        'text': link.getText(),
    })

with open('./links.json', 'w') as outfile:
    json.dump(data, outfile)
