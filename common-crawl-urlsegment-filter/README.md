# Extract URLs from the CommonCrawl Index

A mixed manual and automated step to extract URLs from the CC Index, and post process them.

Data Source: [https://commoncrawl.org/2020/08/august-2020-crawl-archive-now-available/](https://commoncrawl.org/2020/08/august-2020-crawl-archive-now-available/)


## Goal

Extract URLs with a certain URL segment. In this example we are extracting `author` and `writer` as URL segments.


## Tools Used

Bash with cat, wget, gunzip, and grep mostly. PHP to do some organizing.

Note: I've used [Gron](https://github.com/tomnomnom/gron) by Tomnomnom at the beginning. But it didn't end up making it into the final version. Still definitely worth to consider, if you end up processing large numbers of JSON files.

[Parent](../README.md)
