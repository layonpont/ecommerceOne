</div>

        <footer class="text-center" id="footer">
            &copy; Copywright 2017 Shaunta's Boutique
        </footer>

        
        
            
        <script src="js/main.js"></script>
        <script>
            function detailsmodal(id){
                var data = {"id" : id};

                $.ajax({
                    url : '/projects/ecommerceOne/includes/detailsmodal.php',
                    method : "post",
                    data : data,
                    success : function(data){
                        $('body').append(data);
                        $('#details-modal').modal('toggle');
                    },
                    error : function(){
                        alert("Something went wrong!");
                    }
                });
            }
        </script>
    </body>
</html>