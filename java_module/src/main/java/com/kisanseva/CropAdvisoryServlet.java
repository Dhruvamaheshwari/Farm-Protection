package com.kisanseva;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;

@WebServlet("/crop-advisory")
public class CropAdvisoryServlet extends HttpServlet {
    
    private static final long serialVersionUID = 1L;

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        
        String soil = request.getParameter("soil");
        String season = request.getParameter("season");
        
        PrintWriter out = response.getWriter();
        out.println("<!DOCTYPE html>");
        out.println("<html>");
        out.println("<head>");
        out.println("<title>Kisan Seva - Crop Advisory</title>");
        out.println("<style>");
        out.println("body { font-family: Arial, sans-serif; margin: 40px; background-color: #f5f5f5; }");
        out.println(".container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }");
        out.println("h1 { color: #2c5530; text-align: center; }");
        out.println("form { margin-top: 20px; }");
        out.println("label { display: block; margin: 10px 0 5px 0; font-weight: bold; }");
        out.println("input, select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }");
        out.println("button { background-color: #4CAF50; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; width: 100%; }");
        out.println("button:hover { background-color: #45a049; }");
        out.println(".result { margin-top: 20px; padding: 15px; background-color: #e8f5e9; border-left: 4px solid #4CAF50; border-radius: 5px; }");
        out.println("</style>");
        out.println("</head>");
        out.println("<body>");
        out.println("<div class=\"container\">");
        out.println("<h1>🌾 Kisan Seva - Crop Advisory System 🌾</h1>");
        out.println("<p>Get expert crop recommendations based on your soil and season.</p>");
        
        if (soil != null && season != null && !soil.isEmpty() && !season.isEmpty()) {
            String recommendation = CropAdvisory.getRecommendation(soil, season);
            out.println("<div class=\"result\">");
            out.println("<h3>Recommendation:</h3>");
            out.println("<p><strong>" + recommendation + "</strong></p>");
            out.println("</div>");
        }
        
        out.println("<form method=\"GET\" action=\"crop-advisory\">");
        out.println("<label for=\"soil\">Soil Type:</label>");
        out.println("<select name=\"soil\" id=\"soil\" required>");
        out.println("<option value=\"\">Select Soil Type</option>");
        out.println("<option value=\"Alluvial\">Alluvial</option>");
        out.println("<option value=\"Black\">Black</option>");
        out.println("<option value=\"Red\">Red</option>");
        out.println("<option value=\"Clay\">Clay</option>");
        out.println("</select>");
        
        out.println("<label for=\"season\">Season:</label>");
        out.println("<select name=\"season\" id=\"season\" required>");
        out.println("<option value=\"\">Select Season</option>");
        out.println("<option value=\"Kharif\">Kharif</option>");
        out.println("<option value=\"Rabi\">Rabi</option>");
        out.println("<option value=\"Zaid\">Zaid</option>");
        out.println("</select>");
        
        out.println("<button type=\"submit\">Get Recommendation</button>");
        out.println("</form>");
        out.println("</div>");
        out.println("</body>");
        out.println("</html>");
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        doGet(request, response);
    }
}

