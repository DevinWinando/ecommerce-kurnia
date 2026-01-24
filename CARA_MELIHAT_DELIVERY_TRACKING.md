# Cara Melihat Delivery Tracking sebagai Customer

## 🎯 **Lokasi Delivery Tracking**

Customer dapat melihat delivery tracking di:

### **1. Order Details Page** ✅
```
URL: /ecommerce/order-details?id=123
atau
URL: /ecommerce/order-details/123
```

Halaman ini sudah diupdate dengan **DeliveryTracking component** yang menampilkan:
- ✅ Real-time map tracking
- ✅ Status delivery (Pending, Assigned, On Delivery, Delivered)
- ✅ Driver info (nama & telepon)
- ✅ Timeline visual
- ✅ Route history
- ✅ Distance & duration
- ✅ Auto-refresh setiap 30 detik

---

## 📱 **Cara Mengakses**

### **Option 1: Dari Orders List**
1. Customer login ke akun mereka
2. Pergi ke **Orders** page (`/ecommerce/orders`)
3. Klik **View** (icon mata) pada order yang ingin di-track
4. Akan redirect ke Order Details dengan map tracking

### **Option 2: Direct URL**
```
https://your-domain.com/ecommerce/order-details?id=123
```
Ganti `123` dengan transaction ID

### **Option 3: Dari Email/Notifikasi**
Tambahkan link tracking di email konfirmasi order:
```
Lihat status pengiriman: 
https://your-domain.com/ecommerce/order-details?id=123
```

---

## 🗺️ **Fitur yang Dilihat Customer**

### **1. Map dengan 3 Marker:**
- 🏢 **Origin** (Warehouse/Toko)
- 🚚 **Driver Location** (Posisi real-time)
- 🏠 **Destination** (Alamat customer)

### **2. Status Timeline:**
```
✓ Assigned → ● On Delivery → ○ Delivered
```

### **3. Delivery Information:**
- Status: On Delivery
- Driver: John Doe (081234567890)
- Distance: 12.5 km
- Duration: 25 minutes
- From: Main Warehouse, Jakarta
- To: Jl. Customer St, Jakarta

### **4. Auto-Refresh:**
- Map update otomatis setiap 30 detik
- Tidak perlu reload page manual

### **5. Request Delivery Button:**
Jika delivery belum dibuat, customer bisa klik tombol:
```
[ Request Delivery ]
```
Untuk meminta admin membuat delivery tracking

---

## 🔧 **Setup untuk Developer**

### **1. Update Router (Opsional)**
Jika belum ada route dengan parameter ID:

```javascript
// resources/app/router/routes.js
{
  path: '/ecommerce/order-details/:id',
  name: 'OrderDetails',
  component: () => import('@/pages/Ecommerce/OrderDetailsPage.vue'),
  meta: { requiresAuth: true }
}
```

### **2. Update Orders List**
Tambahkan link ke order details dengan ID:

```vue
<!-- Di Orders/index.vue -->
<RouterLink 
  :to="`/ecommerce/order-details?id=${order.id}`"
  class="text-primary-500"
>
  <i class="material-symbols-outlined">visibility</i>
</RouterLink>
```

### **3. Test Endpoint**
Test apakah API berfungsi:

```bash
# Test get transaction with tracking
curl http://localhost/api/transactions/123 \
  -H "Authorization: Bearer YOUR_TOKEN"

# Test get tracking only
curl http://localhost/api/transactions/123/delivery-tracking \
  -H "Authorization: Bearer YOUR_TOKEN"
```

---

## 📊 **Example Flow untuk Customer**

```
1. Customer checkout pesanan
   ↓
2. Order masuk ke sistem POS
   ↓
3. Admin assign driver & buat delivery
   ↓
4. Customer buka Order Details page
   ↓
5. Lihat map dengan posisi driver real-time
   ↓
6. Driver mulai perjalanan
   ↓
7. Map update otomatis setiap 30 detik
   ↓
8. Driver sampai & complete delivery
   ↓
9. Status berubah jadi "Delivered"
```

---

## 🎨 **Customize untuk Kebutuhan Anda**

### **Tambah ke Menu Navigasi:**
```vue
<RouterLink to="/my-orders">
  <i class="material-symbols-outlined">local_shipping</i>
  Track My Orders
</RouterLink>
```

### **Buat Halaman "My Orders" Khusus:**
```vue
<!-- pages/MyOrdersPage.vue -->
<template>
  <div>
    <h1>My Orders</h1>
    
    <div v-for="order in orders" :key="order.id">
      <OrderCard :order="order" />
      
      <!-- Show tracking if order has active delivery -->
      <DeliveryTracking 
        v-if="order.status === 'shipped'"
        :transaction-id="order.id" 
      />
    </div>
  </div>
</template>
```

### **Tambah Notification:**
```javascript
// Saat status delivery berubah
if (delivery.status === 'on_delivery') {
  notify('Driver sedang dalam perjalanan!');
}
```

---

## 🔔 **Push Notification (Optional)**

Untuk real-time notification saat status berubah:

### **1. Setup WebSocket/Pusher**
```javascript
// Listen to delivery status changes
Echo.channel(`delivery.${transactionId}`)
  .listen('DeliveryStatusChanged', (e) => {
    // Update UI
    this.deliveryStatus = e.status;
    
    // Show notification
    this.$toast.success(`Delivery status: ${e.status}`);
  });
```

### **2. Backend Broadcast Event**
Di POS system sudah ada:
```php
event(new DeliveryStatusChanged($delivery));
event(new DeliveryLocationUpdated($delivery, $tracking));
```

---

## 📱 **Mobile Responsive**

Component sudah responsive untuk:
- ✅ Mobile (320px+)
- ✅ Tablet (768px+)
- ✅ Desktop (1024px+)

Map akan menyesuaikan dengan ukuran layar.

---

## 🐛 **Troubleshooting**

### **"No delivery tracking available"**
- Delivery belum dibuat di POS system
- Admin perlu assign driver terlebih dahulu
- Customer bisa klik "Request Delivery" button

### **Map tidak muncul**
```bash
# Install Leaflet
npm install leaflet
```

### **Transaction ID tidak ditemukan**
Pastikan URL menggunakan format:
```
/ecommerce/order-details?id=123
```

---

## ✅ **Summary**

Customer dapat melihat delivery tracking di:
1. **Order Details Page** - `/ecommerce/order-details?id=123`
2. Akses dari Orders list dengan klik View
3. Real-time map dengan auto-refresh
4. Mobile responsive
5. Auto-update setiap 30 detik

**Sudah siap digunakan!** 🎉
