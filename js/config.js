var config = {
    lang: 'de',
    time: {
        timeFormat: 24,
        dateFormat: 'dddd, LL'
    },
    weather: {
    	interval: 30000,
    	fadeInterval: 1000,
        //change weather params here:
        params: {
            q: 'Cologne, Germany',
            // metric or imperial
            units: 'metric',
            // if you want a different lang for the weather that what is set above, change it here
            // leave blank to be replaced by previously set value
            lang: '',
            APPID: 'bc122d4132630c9a0aa19b74ff51aadd'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            'Good morning, handsome!',
            'Enjoy your day!',
            'How was your sleep?'
        ],
        afternoon: [
            'Hello, beauty!',
            'You look sexy!',
            'Looking good today!'
        ],
        evening: [
            'Wow, you look hot!',
            'You look nice!',
            'Hi, sexy!'
        ]
    },
    news: {
        feed: 'http://www.spiegel.de/schlagzeilen/tops/index.rss'
    }
}

// Apply global lang to weather
if( config.weather.lang == '') {
    config.weather.lang = config.lang;
}
