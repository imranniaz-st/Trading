<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height: 70px;">
  <div class="tradingview-widget-container__widget" style="height: 70px;"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
      <span class="blue-text">Track all markets on TradingView</span>
    </a>
  </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500 Index"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100 Cash CFD"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR to USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      }
    ],
    "colorTheme": "dark",
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": false,
    "showSymbolLogo": true,
    "displayMode": "adaptive"
  }
  </script>
</div>
<div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
  
  <!-- XAUUSD - Gold -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/XAUUSD/" target="_blank">Track Gold on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "OANDA:XAUUSD",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

  <!-- BTCUSD - Bitcoin -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/BTCUSD/" target="_blank">Track BTC on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "BITSTAMP:BTCUSD",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

  <!-- AAPL - Apple -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" target="_blank">Track AAPL on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "NASDAQ:AAPL",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

  <!-- TSLA - Tesla -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/NASDAQ-TSLA/" target="_blank">Track TSLA on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "NASDAQ:TSLA",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

  <!-- AMZN - Amazon -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/NASDAQ-AMZN/" target="_blank">Track AMZN on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "NASDAQ:AMZN",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

  <!-- EURUSD - Forex -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
      <a href="https://www.tradingview.com/symbols/EURUSD/" target="_blank">Track EURUSD on TradingView</a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
      "symbol": "OANDA:EURUSD",
      "colorTheme": "light",
      "isTransparent": false,
      "locale": "en",
      "width": 350
    }
    </script>
  </div>

</div>

<!-- TradingView Widget END -->
<!-- @include('templates.basic.sections.crypto_currency') -->
<!-- @include('templates.basic.sections.coin_pair') -->
<!-- @include('templates.basic.coin.top_exchange_coin') -->
@include('templates.basic.sections.coin_pair' )
