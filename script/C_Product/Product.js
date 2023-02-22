class Product {
    constructor(
        id,
        name,
        price,
        img,
        count = 1
    ){
        this.id = id,
        this.name = name,
        this.price = price,
        this.img = img,
        this.count = count
    }
}

export default Product;