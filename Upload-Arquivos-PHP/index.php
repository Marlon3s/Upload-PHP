<html>
    <body>
        <?php     
            if(isset($_POST['acao'])){
                $arquivo = $_FILES['file'];
                $arquivoNovo = explode('.',$arquivo['name']);

                if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
                    die('Você não pode fazer upload deste tipo de arquivo');
                }
                else{
                    echo 'Selecione um arquivo';
                    move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
                }
            }       
        ?>
        <form action ="" method="post" enctype="multipart/form-data">> 
            <input type="file" name ="file" />
            <input type="submit" name="acao" value="Enviar"/>
        </form>
    </body>
</html>