<!DOCTYPE html>
<html>
<body>
    <div id="interactive" class="viewport"></div>
    <script src="resources/assets/js/quaggaJS-master/dist/quagga.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <script>
        alert("aaa")

        Quagga.init({
            inputStream: { type : 'LiveStream' },
            decoder: {
                readers: [{
                    format: 'ean_reader',
                    config: {}
                }]
            }
        }, (err) => {

            if(!err) {

                Quagga.start();

            }

        });

        let checking = false;

        Quagga.onDetected((result) => {

            var code = result.codeResult.code;
            const url = '/shipment/check';

            if(!checking) {

                checking = true;
                axios.post(url, { code: code })
                    .then((response) => {

                        const result = response.data.result;

                        if(result) {

                            const productName = response.data.shipment.product_name;
                            alert('「'+ productName +'」の配送が完了しました。');

                        } else {

                            alert('この商品は登録されていません。');

                        }

                    })
                    .catch((error) => {})
                    .then(() => {

                        checking = false;

                    });

            }

        });

    </script>
</body>
</html>
