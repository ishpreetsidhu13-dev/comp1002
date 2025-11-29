// STEP C: Get the current URL for the page
var currenturl = window.location.href;
// STEP D: Grab all the top-level <a> elements inside the <nav> element at the top of the page (inside the <header> element)
var navLinks = document.querySelectorAll("header nav a");
// STEP E: Create a place to store the href value for each <a> element

// STEP F: For each <a> element in the NodeList navLinks, compare the href property with the URL for the current page
   for (var i = 0; i < navLinks.length; i++) {
    // STEP G: Grab the href property of each <a> (element)
          var navHref = navLinks[i].href;       
    // STEP H: Check for a match with the current page
    if (linkhref === currenturl) {
        // STEP I: They match - so this <a> is the link for the current page
        navLinks[i].className = "currentpage";
    }
   }
    
