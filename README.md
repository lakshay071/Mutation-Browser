Aim:
To build a part of the search page from the webpage
http://scbt.sastra.edu/mutbrowser/ which is used to access mutation information
from a database containing different mutation properties, using PHP.
Dataset Information:
Amyotrophic Lateral Sclerosis (ALS) is a commonly occurring fatal neurological disorder.
It is of two types: familial ALS (fALS), which is hereditary and sporadic ALS (sALS) for
which the cause is unknown. Recent research identified scattered mutations in Cu/Zn
superoxide dismutase (SOD1), resulting in the accumulation of misfolded SOD1 over the
motor neuron, as the primary cause of ALS.
Literature survey sourced 104 mutations in the SOD1 protein, but the causative
mechanism of these mutations is still uncertain. Every mutated form of the protein was
modelled using the Mutate & Solvate server.
Secondary structure and accessibility information was obtained for modelled proteins
using the programs Stride and NAccess respectively.
Mutation-induced changes were calculated and their effects were analyzed based on
definitive physiochemical, energetic and conformational properties of the amino acids
are show in in the table.

Steps:
Download the SQL Data set from the GCR, given the SQL database file(partial list) for
Amyotrophic Lateral Sclerosis mutation data. Store that into the Mysql Database

Create 3 dropdown showing the list of wild type residues, mutation position and the
respective mutation residues. Upon selection in the drop down, respective mutation
position is altered in the second list of items. When the second list of items altered
respective mutation positions are changed.
Using PHP:
Finally when the user submits the data in the server, all other information
regarding that mutation is parsed using PHP mysql.
