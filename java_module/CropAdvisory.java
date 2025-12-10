import java.util.Scanner;

public class CropAdvisory {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("=========================================");
        System.out.println("   🌾 Kisan Seva - Crop Advisory System 🌾");
        System.out.println("=========================================");
        System.out.println("Get expert crop recommendations based on your soil and season.");
        System.out.println();

        while (true) {
            System.out.println("\n--- New Inquiry ---");
            System.out.print("Enter Soil Type (e.g., Alluvial, Black, Red, Clay): ");
            String soil = scanner.nextLine().trim();

            System.out.print("Enter Season (e.g., Kharif, Rabi, Zaid): ");
            String season = scanner.nextLine().trim();

            String recommendation = getRecommendation(soil, season);

            System.out.println("\n>>> Recommendation: " + recommendation);

            System.out.print("\nDo you want to check another? (yes/no): ");
            String choice = scanner.nextLine().trim();
            if (choice.equalsIgnoreCase("no")) {
                break;
            }
        }

        System.out.println("\nThank you for using Kisan Seva Crop Advisory. Happy Farming!");
        scanner.close();
    }

    private static String getRecommendation(String soil, String season) {
        soil = soil.toLowerCase();
        season = season.toLowerCase();

        if (soil.contains("black")) {
            if (season.contains("kharif")) return "Cotton, Soybean, Jowar";
            if (season.contains("rabi")) return "Wheat, Gram, Safflower";
        } else if (soil.contains("alluvial")) {
            if (season.contains("kharif")) return "Rice, Maize, Sugarcane";
            if (season.contains("rabi")) return "Wheat, Mustard, Barley";
            if (season.contains("zaid")) return "Watermelon, Cucumber";
        } else if (soil.contains("red")) {
            if (season.contains("kharif")) return "Groundnut, Ragi, Rice";
            if (season.contains("rabi")) return "Pulses, Millets";
        } else if (soil.contains("clay")) {
            return "Rice, Wheat (requires good drainage)";
        }

        return "Consult a local expert for specific advice on '" + soil + "' soil in '" + season + "' season.";
    }
}
