## PM 2.5 Forecasting with LSTM RNN
* Extracted exogeneous data from [https://earth.nullschool.net](https://earth.nullschool.net/) and transformed all data to be ready-to-use for forecasting
* Modified and tuned long short-term memory recurrent neural network, resulting in MAPE at 18.884% 
[**–3%** of MAPE compared to LSTM RNN without exogenous data, and **–31.16%** to naïve method]


Step 1: Extracting Data from [https://earth.nullschool.net](https://earth.nullschool.net/) with Selenium [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1zLPFnpIX3Hk1bdTPUKAtQ0Z4AJTXpfpH?usp=sharing)

Step 2: Building LSTM RNN model with Exogeneous Data (MAPE: 18.884%) [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1lg2AJyZOjypWqPZS9s2pAIJ6gtUiEstE?usp=sharing)

Compared result:

* with LSTM without exogeneous data (MAPE: 21.882%) [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1zPgGMfIdcmhy2iL0ihxQt6M9dvftewBz?usp=sharing)

* with Naive Method (MAPE: 50.043 %) [![Open In Colab](https://github.com/Teethavattcp/teethavat_port_data/blob/main/img/colab-badge.svg)](https://colab.research.google.com/drive/1M2D-IPBm5CVwQVscWA4b6fid70SRcdw_?usp=sharing)
