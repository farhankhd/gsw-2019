function countdown() {
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 1, 2018 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
}

function getSpeakers() {
    var filename = 'data/speakersinfo.csv'
    Papa.parse(filename, {
        download: true,
        header: true,
        complete: function(results) {
            console.log(results);

            var speakers = results['data']
            var rows = speakers.length
            console.log(rows);

            for (var i = 0; i < rows; i++) {
                var currentSpeaker = speakers[i];
                console.log(currentSpeaker);

                var name = currentSpeaker['First Name'] + ' ' + currentSpeaker['Last Name'];

                var anchor = name.replace(/ /g, "_");

                var path = currentSpeaker['Filename'];
                var bio = currentSpeaker['Bio'];
                var title = currentSpeaker['Title'];

                var associationMarkup = currentSpeaker['MIT association'] == 'Y' ?
                    '<img class=\'speaker-picture-association\' src=\'images/speaker/mit.png\'/>' : '';

                var imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>' +
                    associationMarkup +
                    '<img class=\'speaker-picture\' src=\'images/speaker/' + path + '\'>';
                // markup += imageMarkup + name + '</div>';

                speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\'>' +
                    '<span class=\"anchor\" id=\"' + anchor + '\"></span>' +
                    imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>' +
                    '<div class=\'speaker-expanded-name\'>' + name + '</div>' +
                    '<div class=\'speaker-expanded-position\'>' + title + '</div>' +
                    bio + '</div></div>';

                keynoteMarkup = '<div class=\'speaker row\'>' +
                    associationMarkup +
                    '<img class=\'speaker-picture-keynote\' src=\'images/speaker/' + path + '\'>';
                keynoteMoreMarkeup = '<div class=\'row speaker-expanded-bio\'>' +
                    '<span class=\"anchor\" id=\"' + anchor + '\"></span>' +
                    keynoteMarkup + '</div><div class=\'row speaker-expanded-text\'>' +
                    '<div class=\'speaker-expanded-name\' style=\'text-align: center\'>' + name + '</div>' +
                    '<div class=\'speaker-expanded-position\' style=\'text-align: center\'>' + title + '</div>' +
                    bio + '</div></div>';

                if (currentSpeaker['Keynote'] == 'Y') {
                    $(keynoteMoreMarkeup).appendTo('#keynote-section-expanded');
                } else {
                    $(speakerInfoMarkup).appendTo('#speaker-section-expanded');
                }
            }

        }
    });
}

// getSpeakers()

// countdown()
