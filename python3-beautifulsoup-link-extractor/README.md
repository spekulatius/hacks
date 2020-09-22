# Link Extractor using Python and BeautifulSoup

Extracting links from a URL given as CLI argument using Python 3 and BeautifulSoup 4.

**Update: This has been used as part of a comparison of [BeautifulSoup and PHPScraper extracting links](https://github.com/spekulatius/link-scraping-test-beautifulsoup-vs-phpscraper) project. More details can be found in the repo there.**

## Idea

Extracting links with href, target, rel, title and of course the anchor text.

## Goal

Seeing how simple the code could be in comparison to my [PHP scraping library](https://github.com/spekulatius/phpscraper) ([docs](https://phpscraper.de)). Maybe some performance testing later on.

## Running


```bash
python3 link-extractor.py https://example.com
```

## Notes

If you want to beautify the json you can run:

```bash
python -m json.tool links.json > links2.json
```


[Parent](../README.md)
