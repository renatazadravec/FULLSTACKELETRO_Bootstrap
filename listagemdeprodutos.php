<div class="produtos">
    <div class="row">
        <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
        ?>
            <div class="col-md-4 box_produto <?php echo $rows["categoria"]; ?>">
                <img src="./imagens/<?php echo $rows["imagem"]; ?>"   />
                <h1><?php echo $rows["nome"]; ?></h1>          
                <span class="original">R$ <?php echo $rows["preco"]; ?></span>
                <span class="promocao">R$ <?php echo $rows["preco_promocao"]; ?></span>
            </div>
        <?php
                }
            } else {
                echo "Nenhum produto cadastrado!";
            }
        ?>
    </div>

</div>