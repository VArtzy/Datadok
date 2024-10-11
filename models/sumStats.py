import pandas as pd
import json
from scipy import stats
import numpy as np

def generate_insights(df, results):
    insights = []

    if 'total_penjualan' in df.columns:
        total_penjualan = results['total_penjualan']
        insights.append(f"Total penjualan Anda adalah Rp {total_penjualan:,.2f}.")

        if 'produk' in df.columns:
            produk_terlaris = results.get('produk_terlaris')
            if produk_terlaris:
                penjualan_produk_terlaris = df[df['produk'] == produk_terlaris]['total_penjualan'].sum()
                insights.append(f"{produk_terlaris} adalah produk terlaris Anda, menghasilkan Rp {penjualan_produk_terlaris:,.2f} dalam penjualan.")

    insights.append(f"Dataset Anda berisi {df.shape[0]} catatan dengan {df.shape[1]} atribut.")

    kolom_numerik = df.select_dtypes(include=[np.number]).columns
    for kolom in kolom_numerik:
        nilai_rata_rata = df[kolom].mean()
        nilai_maksimum = df[kolom].max()
        insights.append(f"Rata-rata {kolom} adalah {nilai_rata_rata:,.2f}, dengan nilai maksimum {nilai_maksimum:,.2f}.")

    if 'tanggal' in df.columns:
        df['tanggal'] = pd.to_datetime(df['tanggal'])
        penjualan_30_hari_terakhir = df[df['tanggal'] > df['tanggal'].max() - pd.Timedelta(days=30)]['total_penjualan'].sum()
        insights.append(f"Penjualan 30 hari terakhir: Rp {penjualan_30_hari_terakhir:,.2f}")

    if 'kategori' in df.columns:
        kategori_terbaik = df.groupby('kategori')['total_penjualan'].sum().idxmax()
        penjualan_kategori_terbaik = df[df['kategori'] == kategori_terbaik]['total_penjualan'].sum()
        insights.append(f"Kategori produk terbaik adalah {kategori_terbaik}, dengan total penjualan Rp {penjualan_kategori_terbaik:,.2f}.")

    return insights

def analyze_csv(file_path):
    df = pd.read_csv(file_path)

    kolom_numerik = df.select_dtypes(include=[np.number]).columns
    summary_stats = {}

    for kolom in kolom_numerik:
        column_stats = {
            "rata_rata": df[kolom].mean(),
            "median": df[kolom].median(),
            "modus": df[kolom].mode().iloc[0],
            "standar_deviasi": df[kolom].std(),
            "minimum": df[kolom].min(),
            "maksimum": df[kolom].max()
        }
        summary_stats[kolom] = column_stats

    results = {
        "statistik_ringkasan": summary_stats,
        "ukuran_data": {
            "baris": df.shape[0],
            "kolom": df.shape[1]
        }
    }

    if 'jumlah' in df.columns and 'harga' in df.columns:
        df['total_penjualan'] = df['jumlah'] * df['harga']
        results['total_penjualan'] = float(df['total_penjualan'].sum())

    if 'produk' in df.columns and 'jumlah' in df.columns:
        produk_terlaris = df.groupby('produk')['jumlah'].sum().idxmax()
        results['produk_terlaris'] = produk_terlaris

    insights = generate_insights(df, results)
    results["wawasan"] = insights

    return results
