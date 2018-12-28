<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/speaker.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Our Speakers
    </h1>
    </div>
</div>

<div class="section">
    <p class="endSpeakers">Come back soon, more speakers are added every day!</p>
</div>

<?php
$scripts .= "
<script src=\"splash/js/d3.js\"></script>
<script>
   d3.csv(\"data/speakers.csv\", function(error, speakers) {
      if (error) throw error;

    // columns for display on the site
    var totalColumns = 4;
    var rows = speakers.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\'row speaker-row text-center\'>';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < speakers.length){
                var speaker = speakers[i*totalColumns + j];

                var name = speaker['First Name'] + ' ' + speaker['Last Name'];
                var anchor = name.replace(/ /g,\"\");

                var path = speaker['Filename'];
                var bio = speaker['Bio'];
                var title = speaker['Title'];
                var associationMarkup = speaker['MIT association'] == 'Y' ?
                    '<img class=\'speaker-picture-association\' src=\'speaker/img/mit.png\'/>' : '';

                imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>'
                    + associationMarkup
                    + '<img class=\'speaker-picture\' src=\'speaker/img/' + path + '\'>';
                markup += imageMarkup + name + '</div>';

                speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\'>'
                    + '<span class=\"anchor\" id=\"' + anchor + '\"></span>'
                    + imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>'
                    + '<div class=\'speaker-expanded-name\'>' + name + '</div>'
                    + '<div class=\'speaker-expanded-position\'>' + title + '</div>'
                    + bio + '</div></div>';
                $(speakerInfoMarkup).appendTo('#speaker-section-expanded');
            }
            else {
                markup += '<div class=\'speaker col-sm-6 col-md-3\'></div>';
            }
        }
    }
   
   });
</script>";

include("templates/footer.php");
?>