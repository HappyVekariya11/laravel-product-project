<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

<h2>{{ $product->name }}</h2>

<select id="variant">
    @foreach($product->variants as $variant)
        <option value="{{ $variant->id }}">
            {{ $variant->name }}
        </option>
    @endforeach
</select>

<select id="quantity"></select>

<h3 id="price"></h3>

<script>
let variantSelect = document.getElementById('variant');
let quantitySelect = document.getElementById('quantity');
let priceBox = document.getElementById('price');

variantSelect.addEventListener('change', function(){
    let variantId = this.value;

    axios.get('/products/{{ $product->slug }}')
    .then(res => {
        let variant = res.data.variants.find(v => v.id == variantId);
        quantitySelect.innerHTML = '';

        variant.prices.forEach(p => {
            quantitySelect.innerHTML += 
              `<option value="${p.quantity}">${p.quantity}</option>`;
        });
    });
});

quantitySelect.addEventListener('change', function(){
    axios.get('/get-price',{
        params:{
            variant_id: variantSelect.value,
            quantity: this.value
        }
    }).then(res=>{
        priceBox.innerHTML = '₹ ' + res.data.price;
    });
});
</script>

</body>
</html>