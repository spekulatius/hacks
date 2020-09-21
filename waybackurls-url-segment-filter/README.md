# Waybackurls URL Segment Parser

A tool to fetch all URLs from archive.org and prepare URLs into segments to allow filtering by URL segments.

## Use Cases: Finding all GitHub Repos with certain parameters

```bash
# Goal: filter URL like
# - github.com/*/*awesome*
# - github.com/*seo*
# - github.com/*/*seo*

split into URL segments
```

## Install

### [waybackurls](https://github.com/tomnomnom/waybackurls) by @Tomnomnom

```
go get https://github.com/tomnomnom/waybackurls
```

## Conclusion

While playing around with this I've noticed that the returned URL set is mostly JS, CSS, etc. So not the URLs I'm after and furthermore the set is too small to gain significant insights.

[Parent](../README.md)
