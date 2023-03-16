const { DateTime } = require("luxon");

module.exports = function(eleventyConfig) {
    // Copy assets
    eleventyConfig.addPassthroughCopy("src/assets");

    // Blog Article Dates
    // Todo: Set date and time format to "jS F Y \a\\t g:i a".
    eleventyConfig.addFilter("articleDate", (dateObj) => {
        return DateTime.fromJSDate(dateObj).toLocaleString(DateTime.DATE_MED);
    });
    
    // Return your Object options:
    return {
        dir: {
            input: "src",
            output: "public"
        }
    }
};
