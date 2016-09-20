# Rapid
Website is for rental properties.

I'm modifying a wordpress website with propteries for rent.

I'm modifying an ajax call to create a custom filter bar to filter results.

GOAL: When options are checked results are filtered.

CURRENTLY: Works when a single option is checked but not with more than 1.

ISSUE:
With 2 options checked I either get: No results, Or results for only the first option checked in filterbar or only last option checked.
When viewing Chrome Console-> Object -> request -> postData -> params it creates a new object for the 2nd option checked. 
Results are then displayed for only that last option..


git_my_functions.php has the html for the filterbar that's displayed with shortcode.

git_extra.js has jQuery to filter on click and function to run with ajax request when clicked.

git_ajax_functions.php has function for the action that runs on ajax request.


Thanks for any help!
