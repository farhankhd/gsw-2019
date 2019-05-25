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

function linkify(inputText) {
    var replacedText, replacePattern1, replacePattern2, replacePattern3;

    //URLs starting with http://, https://, or ftp://
    replacePattern1 = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
    replacedText = inputText.replace(replacePattern1, '<a href="$1" target="_blank">$1</a>');

    //URLs starting with "www." (without // before it, or it'd re-link the ones done above).
    replacePattern2 = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
    replacedText = replacedText.replace(replacePattern2, '$1<a href="http://$2" target="_blank">$2</a>');

    //Change email addresses to mailto:: links.
    replacePattern3 = /(([a-zA-Z0-9\-\_\.])+@[a-zA-Z\_]+?(\.[a-zA-Z]{2,6})+)/gim;
    replacedText = replacedText.replace(replacePattern3, '<a href="mailto:$1">$1</a>');

    return replacedText;
}

function getSpeakers() {
    var filename = 'data/bios-new.csv'
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

                var name = currentSpeaker['WebName'];

                var first = currentSpeaker['First Name'].toLowerCase();

                var anchor = name.replace(/ /g, "_");

                var path = currentSpeaker['headshot'];
                var bio = currentSpeaker['Bio'];
                var title = currentSpeaker['Job Title'];

                var wait = currentSpeaker['Wait'];
                var id = path.replace('.jpg', '').replace('.png', '').replace('.jpeg', '');

                var linkedIn = currentSpeaker['LinkedIn'];

                // if (bio.length == 0) {
                //     var bio = currentSpeaker['Bio'];
                // }

                var job = '';
                var place = '';

                // var titles = title.split('&&');
                // console.log(titles);
                // console.log(title.includes('&&'));

                var double = title.includes('&&');

                if (double) {
                    job = title.split('&&')[0];
                    place = title.split('&&')[1];
                } else {
                    job = title.split(',')[0];
                    place = title.split(',')[1];
                }

                bio = linkify(bio);
                associationMarkup = '';
                associationMarkupExpanded = '';

                if (currentSpeaker['MIT'] == 'Y') {
                    associationMarkup = '<img class=\'speaker-picture-association\' src=\'images/speaker/mit.png\'/>';
                    associationMarkupExpanded = '<img class=\'speaker-picture-association-expanded\' src=\'images/speaker/mit.png\'/>';
                } else if (currentSpeaker['MIT'] == 'Harvard') {
                    associationMarkup = '<img class=\'speaker-picture-association\' src=\'images/speaker-img/harvard-3.png\'/>';
                    associationMarkupExpanded = '<img class=\'speaker-picture-association-expanded\' src=\'images/speaker-img/harvard-3.png\'/>';
                }

                var imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>' +
                    associationMarkupExpanded +
                    '<img class=\'speaker-picture\' src=\'images/speaker-img/' + path + '\'>';
                // markup += imageMarkup + name + '</div>';

                speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\'>' +
                    '<span class=\"anchor\" id=\"' + anchor + '\"></span>' +
                    imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>' +
                    '<div class=\'speaker-expanded-name\'>' + name + '</div>' +
                    '<div class=\'speaker-expanded-position\'>' + title + '</div>' +
                    bio + '</div></div>';

                // keynoteMarkup = '<div class=\'speaker row\'>' +
                //     associationMarkup +
                //     '<img class=\'speaker-picture-keynote\' src=\'images/speaker-img/' + path + '\'>';
                // keynoteMoreMarkeup = '<div class=\'col-lg-12 speaker-expanded-bio\'>' +
                //     keynoteMarkup + '</div><div class=\'row speaker-expanded-text\'>' +
                //     '<div class=\'speaker-expanded-name\' style=\'text-align: center\'>' + name + '</div>' +
                //     '<div class=\'speaker-expanded-position\' style=\'text-align: center\'>' + title + '</div>' +
                //     bio + '</div></div>';

                // if (currentSpeaker['Keynote'] == 'Y') {
                //     $(keynoteMoreMarkeup).appendTo('#keynote-section-expanded');
                // } else {
                //     $(speakerInfoMarkup).appendTo('#speaker-section-expanded');
                // }

                speakerSmallMarkup = '</div><div class="team-speaker col-md-4" style="padding: 20" id="' + first + '"><a href="#modal-text-' + id + '"data-modal-id="modal-text" data-toggle="modal">' +
                    associationMarkup +
                    '<img class="team-picture" src=\'images/speaker-img/' + path + '\'>' +
                    '<div class="team-name">' + name + '</div>' +
                    '<div class="team-role" style="font-size: 0.6em">' + job + '</div>' +
                    '<div class="team-role" style="font-size: 0.6em">' + place + '</div>' +
                    // '<div class="team-area">MIT Health Sciences Technology</div>' +
                    '<a href="' + linkedIn + '" <i style="font-size:10px" class="fa">&#xf08c;</i></a>' +
                    '</div>'

                modalMarkup = '<div class="modal fade" id="modal-text-' + id + '" tabindex="-1" role="dialog" aria-labelledby="modal-text-label">' +
                    '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById(\'video\').pause();">' +
                    ' <span aria-hidden="true">&times;</span> </button> </div>' +
                    ' <div class="modal-body">' +

                    speakerInfoMarkup

                    ' </div></div></div> </div>';

                if (wait != 'Y' && name.length > 0) {
                    // $(speakerSmallMarkup).appendTo('#speaker-section-expanded');
                    // $(modalMarkup).appendTo('#speaker-modals');
                    if (currentSpeaker['Keynote'] == 'Y') {
                        $(speakerSmallMarkup).appendTo('#keynote-section-expanded');
                        console.log('KEYNOTE');
                        console.log(speakerSmallMarkup);
                    } else if (currentSpeaker['Keynote'] == 'P') {
                        $(speakerSmallMarkup).appendTo('#plenary-section-expanded');
                    } else {
                        $(speakerSmallMarkup).appendTo('#speaker-section-expanded');
                    }
                    $(modalMarkup).appendTo('#speaker-modals');
                }

            }

        }
    });
}

function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

function getCollabEnglish() {
    var filename = 'data/collab.csv'
    Papa.parse(filename, {
        download: true,
        header: true,
        complete: function(results) {
            console.log(results);

            var collab = results['data']
            var rows = collab.length
            console.log(rows);

            for (var i = 0; i < rows; i++) {
                var currentCollab = collab[i];
                console.log(currentCollab);

                var name = currentCollab['Name'];
                var logoPath = currentCollab['Logo'];
                var bioEnglish = currentCollab['English'];
                var bioSpanish = currentCollab['Spanish'];

                var diffImages = ['Connect', 'CCB'];

                imageMarkup = (currentCollab['Vertical'] == 'Y') ?
                    '<div class=\"col-md-4 text-center\" >' +
                    '<img class=\"\" src=\"' + logoPath + '\">' :
                    '<div class=\"col-md-4 text-center\" >' +
                    '<img class=\"\" src=\"' + logoPath + '\">';

                console.log('location: ' + bioEnglish.indexOf('�'));

                bioEnglish = replaceAll(bioEnglish, '�', 'á');
                bioSpanish = replaceAll(bioSpanish, '�', 'á')

                collabMarkup = '<div class=\"row collab-vertical-center\">' +
                    '<span class="anchor" id=\"' + name + '\"></span>' +
                    '<div class=\"row text-center img-container\"> <div class=\"col-md-1 \"></div> ' +
                    imageMarkup +
                    '</div>' +
                    '<div class=\"team-expanded-text col-md-6\">' + bioEnglish + '</div></div></div> <div class="line"></div>';

                collabMarkupSp = '<div class=\"row collab-vertical-center\">' +
                    '<span class="anchor" id=\"' + name + '\"></span>' +
                    '<div class=\"row text-center img-container\"> <div class=\"col-md-1 \"></div> ' +
                    imageMarkup +
                    '</div>' +
                    '<div class=\"team-expanded-text col-md-6\">' + bioSpanish + '</div></div></div> <div class="line"></div>';

                if (diffImages.indexOf(name) > -1) {

                    imageMarkup = (currentCollab['Vertical'] == 'Y') ?
                        '<div class=\"col-md-4 text-center\" >' +
                        '<img class=\"partner-logo-h\" src=\"' + logoPath + '\">' :
                        '<div class=\"col-md-4 text-center\" >' +
                        '<img class=\"partner-logo-w\" src=\"' + logoPath + '\">';

                    collabMarkup = '<div class=\"row collab-vertical-center\">' +
                        '<span class="anchor" id=\"' + name + '\"></span>' +
                        '<div class=\"row text-center\"> <div class=\"col-md-1 \"></div> ' +
                        imageMarkup +
                        '</div>' +
                        '<div class=\"team-expanded-text col-md-6\">' + bioEnglish + '</div></div></div> <div class="line"></div>';

                    collabMarkupSp = '<div class=\"row collab-vertical-center\">' +
                        '<span class="anchor" id=\"' + name + '\"></span>' +
                        '<div class=\"row text-center\"> <div class=\"col-md-1 \"></div> ' +
                        imageMarkup +
                        '</div>' +
                        '<div class=\"team-expanded-text col-md-6\">' + bioSpanish + '</div></div></div> <div class="line"></div>';

                }

                $(collabMarkup).appendTo('#collab-section-en');
                $(collabMarkupSp).appendTo('#collab-section-sp');

                // console.log(collabMarkup);


            }

        }
    });
}

getSpeakers()
getCollabEnglish()

// countdown()