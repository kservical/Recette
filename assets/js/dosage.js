        <script>
        var init_dosage=[];
        $(document).ready(function(){
            $(".liste").each(function(index,element){
                init_dosage[index]= $(this).text();
                console.log( $( this ).text());
                console.log(init_dosage);
                        
                    });
            $(".add").click(function(){
                var valeur=$(".nombre").text();
                var nb_personne = parseFloat(valeur)+1;
                $(".nombre").text(nb_personne);
                $(".liste").each(function(index,element){
                    var dosage =nb_personne*init_dosage[index];
                    $( this ).text(dosage);
                    console.log( $( this ).text());
                        
                });
                
            });

            $(".remove").click(function(){
                var valeur=$(".nombre").text();
                if (valeur>=2) {
                    var nb_personne = parseFloat(valeur)-1;
                    $(".nombre").text(nb_personne);
                    $(".liste").each(function(index,element){
                        var dosage =nb_personne*init_dosage[index];
                        $( this ).text(dosage);
                        console.log( $( this ).text());
                        
                    });

                }
                else {
                    $(".nombre").text("1");
                }
            });
        });
        </script>