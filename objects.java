String name = new String("Hello, world!");

public static void main(String[] args) {
    System.out.println("Hello, world!");
}
class Animal{
    private String name;
    private String description;
    public String getName() {
        return name;
    }
}

Animal var = new Animal();
var.getName();