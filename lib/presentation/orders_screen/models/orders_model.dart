import 'package:get/get.dart';
import 'orders_item_model.dart';

class OrdersModel {
  RxList<OrdersItemModel> ordersItemList = RxList.filled(10, OrdersItemModel());
}
