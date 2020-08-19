const puppeteer = require("puppeteer");

async function scrapeBook(url) {
    const browser = await puppeteer.launch();

    // open browser and go to url
    const page = await browser.newPage();
    await page.goto(url);

    // get the image src
    const [el] = await page.$x('//*[@id="ebooksImgBlkFront"]');
    const src = await el.getProperty('src');
    const imgUrl = await src.jsonValue();

    // get the title
    const [el2] = await page.$x('//*[@id="productTitle"]');
    const txt = await el2.getProperty('textContent');
    const title = await txt.jsonValue();

    // output the data.
    console.log({ imgUrl, title });

    browser.close();
}

scrapeBook("https://www.amazon.com/Venture-Adventure-Strategies-Thriving-Entrepreneurship-ebook/dp/B005S74A74/")
