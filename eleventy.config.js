module.exports = function(eleventyConfig) {
    // Copy assets
    eleventyConfig.addPassthroughCopy("src/assets");

    // Todo: Set date and time format to "jS F Y \a\\t g:i a".
    
    // Return your Object options:
    return {
        dir: {
            input: "src",
            output: "public"
        }
    }
};
