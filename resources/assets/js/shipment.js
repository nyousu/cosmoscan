<script type="text/javascript" src="https://serratus.github.io/quaggaJS/examples/js/quagga.min.js"></script>

Quagga.init({
  inputStream: {
    name: 'Live',
    type: 'LiveStream',
    target: document.querySelector('#interactive'), //埋め込んだdivのID
    constraints: {
      facingMode: 'environment',
    },
  },
  locator: {
    patchSize: 'medium',
    halfSample: true,
  },
  numOfWorkers: 2,
  decoder: {
    readers: ['ean_reader'] //ISBNは基本的にこれ（他にも種類あり）
  },
  locate: true,
}, (err) => {
  if(!err) {
    Quagga.start();
  }
})
