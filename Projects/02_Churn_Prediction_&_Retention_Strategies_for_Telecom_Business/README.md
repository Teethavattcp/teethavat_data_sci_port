## Churn Prediction & Retention Strategies for Telecom Business
*	**Created prediction models**, resulting in the best model as XGBoost model (f1-score: 72.657%, accuracy: 80.199%)
*	**Segmented predicted churn customers, and grouped predicted loyal customers** based on their similar behavior with each churn cluster
*	**Generated association rules** from transactions of signed up service for each cluster of both churn and loyal customers
*	**Suggested retention strategies**, based on groups of association rules and each cluster insights analyzed from dashboards’ visualization

Project Presentation Slide: [![Open PDF](https://github.com/teethavattcp/teethavat_port_data/blob/main/img/badge_pdf.gif)](https://drive.google.com/file/d/18DHvPsWPEvvzjNDww-H5U23UMtdbeiIp/view?usp=sharing)

Code for main work (Best Model = XGBoost --> clustering --> association rule mining): [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1qZGmhF9Jft5VHlxWHva9BXMTEdDejth2?usp=sharing)

Code for other prediction models (Perform only predictive task):

| Prediction Model        | F1-score(macro)| Accuracy  | Open Notebook                                                                                             |
| ----------------------- |:--------------:| :--------:| ---------------------------------------------------------------------------------------------------------:| 
| 1) Logistics Regression | 54.852%        | 74.521%   | [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1seBXoAoBpdqaxq2Uwx12H3vSoIVT7QoR?usp=sharing) |
| 2) Decision Tree        | 71.359%        | 78.070%   | [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1UMKEKYmSaUGkXpbp27T1yDlqq4k8U1BS?usp=sharing) |
| 3) Random Forest        | 71.396%        | 79.631%   | [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1e81g6jMNympIRsciU6cwAARPy76IbitM?usp=sharing) |
| 4) K-Nearest Neighbors  | 67.478%        | 77.478%   | [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1VUd6g-PQivLkMT8OwecmnyBJRzOui0D4?usp=sharing) |

.ipynb Outline:

![alt text](https://github.com/teethavattcp/teethavat_data_sci_port/blob/86dc11704224620385ac49beb5a8fab28e30b12e/Projects/02_Churn_Prediction_&_Retention_Strategies_for_Telecom_Business/ipynb_outline.jpg)
