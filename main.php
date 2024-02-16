<style>
    .nome{
        font-weight: bold;
        font-size: 18px;
        color: #073857;
    }
    .conteudo{
        display: flex;
        flex-direction: column;
    }
    .separando{
        display: flex;
        flex-direction: row;
    }
</style>
<main>
        <h1>Estruturas condicionais e de repetição</h1>
        <div class="box">
            <div class="conteudo">

                <div class="separando">
                    <h2>Array de 20 números</h2>
                    <br>
                    <br>
                </div>

                <div class="separando">
                    <br>
                    <?php 
                        $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

                        foreach ($array as $a) {
                            echo "<p class='nome'>$a- </p>";
                        }
                    ?>
                    <br>
                </div> 
                <br>
                <br>

                <div class="separando">
                    
                    <?php
                        $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                        
                        $soma = array_sum($array);
                        $count = count($array);
                        $media = $soma/$count;

                        echo "<h2>A média do array é $media</h2>";

                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
