<?php

namespace ôthentik\Model;

class Woman{
    private $id;
    private $name;
    private $slug;
    private $product_pic1;
    private $product_pic2;
    private $product_pic3;
    private $product_pic4;
    private $price;
    private $content;
    private $create_at;
    

	public function getCreate_at() {
		return $this->create_at;
	}

	public function setCreate_at($create_at): self {
		$this->create_at = $create_at;
		return $this;
	}

	public function getContent() {
		return $this->content;
	}

	public function setContent($content): self {
		$this->content = $content;
		return $this;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price): self {
		$this->price = $price;
		return $this;
	}

	public function getProduct_pic4() {
		return $this->product_pic4;
	}

	public function setProduct_pic4($product_pic4): self {
		$this->product_pic4 = $product_pic4;
		return $this;
	}

	public function getProduct_pic3() {
		return $this->product_pic3;
	}

    
	public function setProduct_pic3($product_pic3): self {
		$this->product_pic3 = $product_pic3;
		return $this;
	}

	public function getProduct_pic2() {
		return $this->product_pic2;
	}

	public function setProduct_pic2($product_pic2): self {
		$this->product_pic2 = $product_pic2;
		return $this;
	}

	public function getProduct_pic1() {
		return $this->product_pic1;
	}

	public function setProduct_pic1($product_pic1): self {
		$this->product_pic1 = $product_pic1;
		return $this;
	}

	public function getSlug() {
		return $this->slug;
	}

	public function setSlug($slug): self {
		$this->slug = $slug;
		return $this;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name): self {
		$this->name = $name;
		return $this;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
}