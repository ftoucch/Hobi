<form role="search" method="get" action="<?php echo home_url('/') ?>">
    <input type="search" id="search-toggle" class="search-bar-input" placeholder="search" value="<?php echo get_search_query() ?>" name="s" title="Search" aria-label="search">
</form>
<button class="search-button-on" id="search-open" onclick="searchToggleOn()"><i class="fa fa-search" aria-label="submit search"></i></button>
<button class="search-button-off" id="search-close" onclick="searchToggleOff()"><i class="fa fa-times" aria-label="submit search"></i></button>
<script>
function searchToggleOn()
        {
            var x = document.getElementById('search-toggle').style.display = "inline";
            var y = document.getElementById('search-open').style.display = "none";
           var z =  document.getElementById('search-close').style.display = "inline";
        }

function searchToggleOff()
        {
            var x = document.getElementById('search-toggle').style.display = "none";
            var y = document.getElementById('search-open').style.display = "inline";
           var z =  document.getElementById('search-close').style.display = "none";
        }
    </script>
