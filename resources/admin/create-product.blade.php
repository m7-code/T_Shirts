<h2>Add T-Shirt</h2>

<form action="/admin/product/store" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="T-Shirt Name" required><br><br>

    <input type="number" name="price" placeholder="Price" required><br><br>

    <input type="file" name="image" required><br><br>

    <button type="submit">Add Product</button>
</form>
