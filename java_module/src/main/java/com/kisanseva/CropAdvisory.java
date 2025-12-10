package com.kisanseva;

public class CropAdvisory {

    public static String getRecommendation(String soil, String season) {
        if (soil == null || season == null) {
            return "Please provide both soil type and season.";
        }
        
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

