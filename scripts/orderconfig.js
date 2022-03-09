var hide_empty_list=true; //uncomment this line to hide empty selection lists

var disable_empty_list=false; //uncomment this line to disable empty selection lists

addListGroup("products", "group");

addOption("group", "Select A Product Group", "", "", 1); //Empty starter option
addList("group", "Business Cards", "Business Cards", "BC");
addList("group", "Flyers/Postcards", "Flyers/Postcards", "FL");
addList("group", "Posters", "Posters", "PS");
addList("group", "Sales Sheets", "Sales Sheets", "SH");
addList("group", "Catalogs", "Catalogs", "CT");
addList("group", "Folded Products", "Folded Products", "FP");
addList("group", "Presentation Folders", "Presentation Folders", "PF");
addList("group", "Diecut Products", "Diecut Products", "DC");
addList("group", "Letterhead/Envelopes", "Letterhead/Envelopes", "LH");
addList("group", "Large Format", "Large Format", "LG");
addList("group", "Custom Job (Enter in Comments)", "Custom", "CU");

addList("BC", "Business Cards", "Business Card", "BC-QTY", 1);
addOption("BC-QTY", "Select A Qty", "", 1);
addList("BC-QTY", "100", "100", "BC-SHORT");
addList("BC-QTY", "250", "250", "BC-SHORT");
addList("BC-QTY", "500", "500", "BC-SHORT");
addList("BC-QTY", "1,000", "1,000", "BC-GANG");
addList("BC-QTY", "2,500", "2,500", "BC-GANG");
addList("BC-QTY", "5,000", "5,000", "BC-GANG");
addList("BC-QTY", "10,000", "10,000", "BC-GANG");
addList("BC-QTY", "15,000", "15,000", "BC-GANG");
addList("BC-QTY", "20,000", "20,000", "BC-GANG");
addList("BC-QTY", "25,000", "25,000", "BC-GANG");
addList("BC-QTY", "Other (Enter in Comments)", "Other", "BC-GANG");
addOption("BC-SHORT", "Select A Style", "", 1);
addList("BC-SHORT", "4/0 UV Color Side", "4/0-UV1S");
addList("BC-SHORT", "4/1 UV Color Side", "4/1-UV1S");
addList("BC-SHORT", "4/4 UV Color Side", "4/4-UV2S");
addOption("BC-GANG", "Select A Style", "", 1);
addList("BC-GANG", "4/0 UV Color Side", "4/0-UV1S");
addList("BC-GANG", "4/1 UV Color Side", "4/1-UV1S");
addList("BC-GANG", "4/4 UV Color Side", "4/4-UV2S");
addList("BC-GANG", "4/4 UV Front Only", "4/4-UV1S");
addList("BC-GANG", "4/4 Custom Spot UV", "4/4-SPOT");
addList("BC-GANG", "4/4 Matte Finish", "4/4-MATTE");
addList("BC-GANG", "Other (Enter in Comments)", "Other");

addOption("FL", "Select A Product Type", "", "", 1); //Empty starter option
addList("FL", "1/8 Page Flyer", "1/8 Page Flyer", "FL-QTY");
addList("FL", "1/6 Page Flyer", "1/6 Page Flyer", "FL-QTY");
addList("FL", "1/4 Page Flyer", "1/4 Page Flyer", "FL-QTY");
addList("FL", "1/3 Page Flyer", "1/3 Page Flyer", "FL-QTY");
addList("FL", "1/2 Page Flyer", "1/2 Page Flyer", "FL-QTY");
addList("FL", "4\" x 9\" Rack Card", "4\" x 9\" Rack Card", "FL-QTY");
addList("FL", "4\" x 6\" Postcard", "4\" x 6\" Postcard", "FL-QTY");
addList("FL", "Full Page Flyer", "Full Page Flyer", "FL-QTY");
addOption("FL-QTY", "Select A Qty", "", 1);
addList("FL-QTY", "1,000", "1,000", "FL-STYLE");
addList("FL-QTY", "2,500", "2,500", "FL-STYLE");
addList("FL-QTY", "5,000", "5,000", "FL-STYLE");
addList("FL-QTY", "10,000", "10,000", "FL-STYLE");
addList("FL-QTY", "15,000", "15,000", "FL-STYLE");
addList("FL-QTY", "20,000", "20,000", "FL-STYLE");
addList("FL-QTY", "25,000", "25,000", "FL-STYLE");
addList("FL-QTY", "30,000", "30,000", "FL-STYLE");
addList("FL-QTY", "35,000", "35,000", "FL-STYLE");
addList("FL-QTY", "40,000", "40,000", "FL-STYLE");
addList("FL-QTY", "Other (Enter in Comments)", "Other", "FL-STYLE");
addOption("FL-STYLE", "Select A Style", "", 1);
addList("FL-STYLE", "4/4 Flood UV", "4/4-FLOOD");
addList("FL-STYLE", "4/4 Spot UV", "4/4-SPOT");
addList("FL-STYLE", "Other (Enter in Comments)", "Other");

addOption("PS", "Select A Product Type", "", "", 1); //Empty starter option
addList("PS", "8.5\" x 14\" Poster", "8.5\" x 14\" Poster", "PS-QTY");
addList("PS", "11\" x 17\" Poster", "11\" x 17\" Poster", "PS-QTY");
addList("PS", "12\" x 18\" Poster", "12\" x 18\" Poster", "PS-QTY");
addList("PS", "17\" x 22\" Poster", "17\" x 22\" Poster", "PS-QTY");
addList("PS", "18\" x 24\" Poster", "18\" x 24\" Poster", "PS-QTY");
addList("PS", "22\" x 34\" Poster", "22\" x 34\" Poster", "PS-QTY");
addList("PS", "24\" x 36\" Poster", "24\" x 36\" Poster", "PS-QTY");
addList("PS", "27\" x 39\" Poster", "27\" x 39\" Poster", "PS-QTY");
addOption("PS-QTY", "Select A Qty", "", 1);
addList("PS-QTY", "100", "100", "PS-STYLE");
addList("PS-QTY", "250", "250", "PS-STYLE");
addList("PS-QTY", "500", "500", "PS-STYLE");
addList("PS-QTY", "1,000", "1,000", "PS-STYLE");
addList("PS-QTY", "2,500", "2,500", "PS-STYLE");
addList("PS-QTY", "5,000", "5,000", "PS-STYLE");
addList("PS-QTY", "10,000", "10,000", "PS-STYLE");
addList("PS-QTY", "15,000", "15,000", "PS-STYLE");
addList("PS-QTY", "20,000", "20,000", "PS-STYLE");
addList("PS-QTY", "30,000", "30,000", "PS-STYLE");
addList("PS-QTY", "Other (Enter in Comments)", "Other", "PS-STYLE");
addOption("PS-STYLE", "Select A Style", "", 1);
addList("PS-STYLE", "4/0", "4/0");
addList("PS-STYLE", "4/4", "4/4");
addList("PS-STYLE", "Other (Enter in Comments)", "Other");

addList("SH", "Sales Sheets", "Sales Sheet", "SH-QTY", 1);
addOption("SH-QTY", "Select A Qty", "", "", 1);
addList("SH-QTY", "250", "250", "SH-GANG");
addList("SH-QTY", "500", "500", "SH-GANG");
addList("SH-QTY", "1,000", "1,000", "SH-GANG");
addList("SH-QTY", "2,500", "2,200", "SH-GANG");
addList("SH-QTY", "5,000", "5,000", "SH-GANG");
addList("SH-QTY", "10,000", "10,000", "SH-GANG");
addList("SH-QTY", "15,000", "15,000", "SH-GANG");
addList("SH-QTY", "20,000", "20,000", "SH-GANG");
addList("SH-QTY", "30,000", "30,000", "SH-GANG");
addList("SH-QTY", "40,000", "40,000", "SH-GANG");
addList("SH-QTY", "Other (Enter in Comments)", "Other", "SH-GANG");
addOption("SH-GANG", "Select A Style", "", 1);
addList("SH-GANG", "4/0", "4/0");
addList("SH-GANG", "4/4", "4/4");
addList("SH-GANG", "Other (Enter in Comments)", "Other");

addOption("CT", "Select A Product Type", "", "", 1); //Empty starter option
addList("CT", "4 Page Catalog", "4 Page Catalog", "CT-QTY");
addList("CT", "6 Page Catalog", "6 Page Catalog", "CT-QTY");
addList("CT", "8 Page Catalog", "8 Page Catalog", "CT-QTY");
addList("CT", "12 Page Catalog", "12 Page Catalog", "CT-QTY");
addList("CT", "16 Page Catalog", "16 Page Catalog", "CT-QTY");
addList("CT", "20 Page Catalog", "20 Page Catalog", "CT-QTY");
addList("CT", "24 Page Catalog", "24 Page Catalog", "CT-QTY");
addList("CT", "28 Page Catalog", "28 Page Catalog", "CT-QTY");
addList("CT", "32 Page Catalog", "32 Page Catalog", "CT-QTY");
addList("CT", "36 Page Catalog", "36 Page Catalog", "CT-QTY");
addList("CT", "8 Page Mini Catalog", "8 Page Mini Catalog", "CT-QTY");
addOption("CT-QTY", "Select A Qty", "", 1);
addList("CT-QTY", "1,000", "1,000", "CT-STYLE");
addList("CT-QTY", "2,500", "2,500", "CT-STYLE");
addList("CT-QTY", "5,000", "5,000", "CT-STYLE");
addList("CT-QTY", "10,000", "10,000", "CT-STYLE");
addList("CT-QTY", "Other (Enter in Comments)", "Other", "CT-STYLE");
addOption("CT-STYLE", "Select A Style", "", 1);
addList("CT-STYLE", "4/4", "4/4");
addList("CT-STYLE", "Other (Enter in Comments)", "Other");

addOption("FP", "Select A Product Type", "", "", 1); //Empty starter option
addList("FP", "5.5\" x 8.5\" Bi-Fold", "5.5\" x 8.5\" Bi-Fold", "FP-QTY");
addList("FP", "8.5\" x 11\" - Bi-fold", "8.5\" x 11\" - Bi-fold", "FP-QTY");
addList("FP", "11\" x 17\" - Bi-fold", "11\" x 17\" - Bi-fold", "FP-QTY");
addList("FP", "8.5\" x 11\" - Tri-fold", "8.5\" x 11\" - Tri-fold", "FP-QTY");
addList("FP", "11\" x 17\" - Tri-fold", "11\" x 17\" - Tri-fold", "FP-QTY");
addList("FP", "25.5\" x 11\" - Tri-fold", "25.5\" x 11\" - Tri-fold", "FP-QTY");
addList("FP", "8.5\" x 14\" - Double Parallel Fold", "8.5\" x 14\" - Double Parallel Fold", "FP-QTY");
addList("FP", "11\" x 17\" - Right Angle \(1\/4\) fold", "11\" x 17\" - Right Angle \(1\/4\) fold", "FP-QTY");
addList("FP", "11\" x 17\" - \#10 Envelope Fold", "11\" x 17\" - \#10 Envelope Fold", "FP-QTY");
addList("FP", "8.5\" x 14\" - Tri-Fold", "8.5\" x 14\" - Tri-Fold", "FP-QTY");
addList("FP", "8.5\" x 14\" - 4 Panel Roll Fold", "8.5\" x 14\" - 4 Panel Roll Fold", "FP-QTY");
addOption("FP-QTY", "Select A Qty", "", 1);
addList("FP-QTY", "500", "500", "FP-STYLE");
addList("FP-QTY", "1,000", "1,000", "FP-STYLE");
addList("FP-QTY", "2,500", "2,500", "FP-STYLE");
addList("FP-QTY", "5,000", "5,000", "FP-STYLE");
addList("FP-QTY", "10,000", "10,000", "FP-STYLE");
addList("FP-QTY", "20,000", "20,000", "FP-STYLE");
addList("FP-QTY", "30,000", "30,000", "FP-STYLE");
addList("FP-QTY", "40,000", "40,000", "FP-STYLE");
addList("FP-QTY", "Other (Enter in Comments)", "Other", "FP-STYLE");
addOption("FP-STYLE", "Select A Style", "", 1);
addList("FP-STYLE", "4/4", "4/4");
addList("FP-STYLE", "Other (Enter in Comments)", "Other");

addOption("PF", "Select A Product Type", "", "", 1); //Empty starter option
addList("PF", "9\" x 12\" Presentation Folder - 16pt", "9\" x 12\" Presentation Folder - 16pt", "PF-1");
addList("PF", "9\" x 12\" Presentation Folder - 12pt", "9\" x 12\" Presentation Folder - 12pt", "PF-2");
addList("PF", "6\" x 9\" Mini Presentation Folder", "6\" x 9\" Mini Presentation Folder", "PF-3");
addOption("PF-1", "Select A Qty", "", 1);
addList("PF-1", "1,000", "1,000", "PF-STYLE1");
addList("PF-1", "2,500", "2,500", "PF-STYLE1");
addList("PF-1", "5,000", "5,000", "PF-STYLE1");
addList("PF-1", "Other (Enter in Comments)", "Other", "PF-STYLE1");
addOption("PF-2", "Select A Qty", "", 1);
addList("PF-2", "500", "500", "PF-STYLE2");
addList("PF-2", "1,000", "1,000", "PF-STYLE2");
addList("PF-2", "2,500", "2,500", "PF-STYLE2");
addList("PF-2", "5,000", "5,000", "PF-STYLE2");
addList("PF-2", "Other (Enter in Comments)", "Other", "PF-STYLE2");
addOption("PF-3", "Select A Qty", "", 1);
addList("PF-3", "1,000", "1,000", "PF-STYLE2");
addList("PF-3", "2,500", "2,500", "PF-STYLE2");
addList("PF-3", "5,000", "5,000", "PF-STYLE2");
addList("PF-3", "10,000", "10,000", "PF-STYLE2");
addList("PF-3", "Other (Enter in Comments)", "Other", "PF-STYLE2");
addOption("PF-STYLE1", "Select A Style", "", 1);
addList("PF-STYLE1", "4/0", "4/0");
addList("PF-STYLE1", "4/4", "4/4");
addOption("PF-STYLE2", "Select A Style", "");
addList("PF-STYLE2", "4/0", "4/0", 1);

addOption("DC", "Select A Product Type", "", "", 1); //Empty starter option
addList("DC", "1/2 Page Long Door Hanger", "1/2 Page Long Door Hanger", "DC-QTY");
addList("DC", "1/2 Page Door Hanger", "1/2 Page Door Hanger", "DC-QTY");
addList("DC", "1/3 Page Door Hanger", "1/3 Page Door Hanger", "DC-QTY");
addList("DC", "4\" x 7\" Rack Door Hanger", "4\" x 7\" Rack Door Hanger", "DC-QTY");
addOption("DC-QTY", "Select A Qty", "", 1);
addList("DC-QTY", "1,000", "1,000", "DC-STYLE");
addList("DC-QTY", "2,500", "2,500", "DC-STYLE");
addList("DC-QTY", "5,000", "5,000", "DC-STYLE");
addList("DC-QTY", "10,000", "10,000", "DC-STYLE");
addList("DC-QTY", "15,000", "15,000", "DC-STYLE");
addList("DC-QTY", "20,000", "20,000", "DC-STYLE");
addList("DC-QTY", "25,000", "25,000", "DC-STYLE");
addList("DC-QTY", "30,000", "30,000", "DC-STYLE");
addList("DC-QTY", "35,000", "35,000", "DC-STYLE");
addList("DC-QTY", "40,000", "40,000", "DC-STYLE");
addList("DC-QTY", "45,000", "45,000", "DC-STYLE");
addList("DC-QTY", "Other (Enter in Comments)", "Other", "DC-STYLE");
addOption("DC-STYLE", "Select A Style", "", 1);
addList("DC-STYLE", "4/4 Flood UV", "4/4-FLOOD");
addList("DC-STYLE", "4/4 Spot UV", "4/4-SPOT");

addOption("LH", "Select A Product Type", "", "", 1); //Empty starter option
addList("LH", "70\# Offset - Letterhead - Full Bleed", "70\# Offset - Letterhead - Full Bleed", "LH-QTY");
addList("LH", "70\# Offset - \#10 Envelope - Full Bleed", "70\# Offset - \#10 Envelope - Full Bleed", "LH-QTY");
addList("LH", "70\# Offset - \#10 Envelope with Window - Full Bleed", "70\# Offset - \#10 Envelope with Window - Full Bleed", "LH-QTY");
addList("LH", "Std White Stock - Letterhead - Full Bleed", "Std White Stock - Letterhead - Full Bleed", "LH-QTY1");
addList("LH", "Std White Stock - \#10 Envelope - No Bleed", "Std White Stock - \#10 Envelope - No Bleed", "LH-QTY1");
addList("LH", "Std White Stock - \#9 Envelope - No Bleed", "Std White Stock - \#9 Envelope - No Bleed", "LH-QTY1");
addList("LH", "Std White Stock - A-6 Letterhead - No Bleed", "Std White Stock - A-6 Envelope - No Bleed", "LH-QTY1");
addList("LH", "Std White Stock - A-7 Envelope - No Bleed", "Std White Stock - A-7 Envelope - No Bleed", "LH-QTY1");
addOption("LH-QTY", "Select A Qty", "", 1);
addList("LH-QTY", "1,000", "1,000", "LH-STYLE");
addList("LH-QTY", "2,000", "2,000", "LH-STYLE");
addList("LH-QTY", "3,000", "3,000", "LH-STYLE");
addList("LH-QTY", "4,000", "4,000", "LH-STYLE");
addList("LH-QTY", "5,000", "5,000", "LH-STYLE");
addList("LH-QTY", "10,000", "10,000", "LH-STYLE");
addList("LH-QTY", "Other (Enter in Comments)", "Other", "LH-STYLE");
addOption("LH-QTY1", "Select A Qty", "", 1);
addList("LH-QTY1", "1,000", "1,000", "LH-STYLE");
addList("LH-QTY1", "2,000", "2,000", "LH-STYLE");
addList("LH-QTY1", "3,000", "3,000", "LH-STYLE");
addList("LH-QTY1", "4,000", "4,000", "LH-STYLE");
addList("LH-QTY1", "5,000", "5,000", "LH-STYLE");
addList("LH-QTY", "Other (Enter in Comments)", "Other", "LH-STYLE");
addOption("LH-STYLE", "Select A Style", "", 1);
addList("LH-STYLE", "4/0", "4/0");

addOption("LG", "Select A Product Type", "", "", 1); //Empty starter option
addList("LG", "13oz PVC Vinyl", "13oz PVC Vinyl", "LG-QTY1");
addList("LG", "PVC Mesh Vinyl", "PVC Mesh Vinyl", "LG-QTY1");
addList("LG", "3M Adhesive", "3M Adhesive", "LG-QTY3");
addList("LG-QTY1", "Enter Qty in Comments", "Enter Qty in Comments", "LG-STYLE1", 1);
addList("LG-QTY3", "Enter Qty in Comments", "Enter Qty in Comments", "LG-STYLE2", 1);
addOption("LG-STYLE1", "Select A Style", "", 1);
addList("LG-STYLE1", "Hemm and Grommets", "Hemm and Grommets");
addList("LG-STYLE1", "Hemm Only", "Hemm Only");
addList("LG-STYLE1", "Grommets Only", "Grommets Only");
addOption("LG-STYLE2", "Select A Style", "", 1);
addList("LG-STYLE2", "Vehicle Wrap", "Vehicle Wrap");
addList("LG-STYLE2", "Wall Mounted", "Wall Mounted");

addList("CU", "Custom Job (Enter in Comments)", "Custom Job", "CU-QTY", 1);
addList("CU-QTY", "Enter Qty in Comments", "Qty in Comments", "CU-STYLE", 1);
addList("CU-STYLE", "Enter Details in Comments", "Details in Comments", 1);