<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filter</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        Category
    </div>
    <ul>
        <li>
            <a href="#" class="categoryFilter">
                 <input type="checkbox" name="category[apple]"> Apple
            </a>
        </li>
        <li>
            <a href="#" class="categoryFilter">
                <input type="checkbox" name="category[samsung]"> Samsung
            </a>
        </li>
        <li>
            <a href="#" class="categoryFilter">
                <input type="checkbox" name="category[oppo]"> Oppo
            </a>
        </li>
    </ul>
    <script>

        $(function() {

            function getAllUrlParams(url) {

              // get query string from url (optional) or window
              var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

              // we'll store the parameters here
              var obj = {};

              // if query string exists
              if (queryString) {

                // stuff after # is not part of query string, so get rid of it
                queryString = queryString.split('#')[0];

                // split our query string into its component parts
                var arr = queryString.split('&');

                for (var i = 0; i < arr.length; i++) {
                  // separate the keys and the values
                  var a = arr[i].split('=');

                  // set parameter name and value (use 'true' if empty)
                  var paramName = a[0];
                  var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

                  // (optional) keep case consistent
                  paramName = paramName.toLowerCase();
                  if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

                  // if the paramName ends with square brackets, e.g. colors[] or colors[2]
                  if (paramName.match(/\[(\d+)?\]$/)) {

                    // create key if it doesn't exist
                    var key = paramName.replace(/\[(\d+)?\]/, '');
                    if (!obj[key]) obj[key] = [];

                    // if it's an indexed array e.g. colors[2]
                    if (paramName.match(/\[\d+\]$/)) {
                      // get the index value and add the entry at the appropriate position
                      var index = /\[(\d+)\]/.exec(paramName)[1];
                      obj[key][index] = paramValue;
                    } else {
                      // otherwise add the value to the end of the array
                      obj[key].push(paramValue);
                    }
                  } else {
                    // we're dealing with a string
                    if (!obj[paramName]) {
                      // if it doesn't exist, create property
                      obj[paramName] = paramValue;
                    } else if (obj[paramName] && typeof obj[paramName] === 'string'){
                      // if property does exist and it's a string, convert it to an array
                      obj[paramName] = [obj[paramName]];
                      obj[paramName].push(paramValue);
                    } else {
                      // otherwise add the property
                      obj[paramName].push(paramValue);
                    }
                  }
                }
              }

              return obj;
            }

            var params = getAllUrlParams();
            console.log(params.category);
            $('.categoryFilter').on('click', function() {
                console.log('doctors.show')
            });
        });
    </script>
</body>
</html>