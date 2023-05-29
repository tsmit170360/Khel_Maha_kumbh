const prizeCategories = [
    {
      category: "Grant", user: "District Sports Officer",
      details: [
        "School level - For PT Teacher - If 100% registration of school is done then PT teacher gets Rs. 500 incentive",
        "Taluka and zone level - For Taluka/Zone level Planning management - Rs. 50,000 per Taluka ",
        "District level - For District's planning managment and equipments - Rs. 2,00,000 per District + Additionally for employment, travel, tshirt and cap",
        "Mahanagar Palika level - For Mahanagarpalika Planning management of event and equipments - Rs 3,00,000 for Bhavnagar, Junagadh, Jamnagar, Gandhinagar - Rs. 4,00,000 for Ahmedabad, Rajkot, Surat, Vadodara + Additionally for employment, travel, tshirt and cap)",
        "State level - For state level planning management and equipments - Rs. 2,00,000 for men and women + Additionally for employment, tshirt and cap, food, stay, travel"
      ],
      links: ["Apply here"]
    },
    { category: "Prize Money", user: "Player", details: ["Players who wins prize money will receive it into their account through DBT"], links: ["Fill this form to receive (Only for winners)"]},
    { category: "School Team", user: ["Players applied through school/institutes"], details: ["Taluka level - 3 best schools", "District level - schools + sports schools - 3 best schools", "State level - 3 best schools - Rs 5,00,000, Rs 3,00,000, Rs 2,00,000 - used only for sports i.e. 60% for training and 40% for the equipments"], links: [

    ]},
    {
      category: "Prize Money", user: ["Players", "Coaches"],
      details: ["Players recieve the prize money if they have won the game - Participants are expected to fill the form - data referred in the winning module", "Coaches of players who won the game receives the prize money"],
      links: "Fill this form to receive prize money to your account"
    },
    { category: "School Competition Winner's Certificate", user: ["School participants"], details: ["Players who won the game at their school receives winner certificates"], links: ["PT teacher/ Coach needs to fill this form and provide school scores"] },
    { category: "Certificate, Medal, and Tracksuit", user: ["Players"], details: ["District sports officer will receive everything mentioned through sports authority of Gujarat. Medal and tracksuits are only given to state level winners"], links: []
    }
  ];

  const table = document.createElement("table");
  const thead = document.createElement("thead");
  const tbody = document.createElement("tbody");
  const headerRow = document.createElement("tr");
  const headerCell1 = document.createElement("th");
  headerCell1.textContent = "Prize Category";
  headerRow.appendChild(headerCell1);
  const headerCell4 = document.createElement("th");
  headerCell4.textContent = "User";
  headerRow.appendChild(headerCell4);
  const headerCell2 = document.createElement("th");
  headerCell2.textContent = "Details";
  headerRow.appendChild(headerCell2);
  const headerCell3 = document.createElement("th");
  headerCell3.textContent = "Links";
  headerRow.appendChild(headerCell3);
  thead.appendChild(headerRow);
  table.appendChild(thead);

  prizeCategories.forEach(category => {
    const row = document.createElement("tr");
    const cell1 = document.createElement("td");
    cell1.textContent = category.category;
    row.appendChild(cell1);
    const cell4 = document.createElement("td");
    cell4.textContent = category.user;
    row.appendChild(cell4);
    const cell2 = document.createElement("td");
    if (category.details.length > 0) {
      const list = document.createElement("ul");
      category.details.forEach(detail => {
        const item = document.createElement("li");
        item.textContent = detail;
        list.appendChild(item);
      });
      cell2.appendChild(list);
    }
    row.appendChild(cell2);
    const cell3 = document.createElement("td");
    cell3.textContent = category.links;
    row.appendChild(cell3);
    tbody.appendChild(row);
});

table.appendChild(tbody);

document.body.appendChild(table);