var Jasmine2HtmlReporter = require('protractor-jasmine2-html-reporter');

exports.config = {
    framework: 'jasmine',
    seleniumAddress: 'http://www.idealplacas.com/',
    specs: ['test_signup_simple.js'],

    onPrepare: function(){
        jasmine.getEnv().addReporter(new Jasmine2HtmlReporter({
            savePath: './tests/reports/'
        }))
    }
  }