<?php

namespace App\Enums;

enum OrderStatus: string
{
    case NewOrder = 'new_order';                 // Nouvelle commande
    case PendingConfirmation = 'pending_confirmation'; // En attente de confirmation
    case Confirmed = 'confirmed';                // Confirmé
    case OutForDelivery = 'out_for_delivery';      // Sorti en livraison
    case Delivered = 'delivered';                // Livré
    case CancelledByCustomer = 'cancelled_by_customer'; // Annulé par le client
    case CancelledByShop = 'cancelled_by_shop';     // Annulé par la boutique
    case Returned = 'returned';                    // Retourné

    // On met à jour les étiquettes pour qu'elles correspondent
    public function label(): string
    {
        return match ($this) {
            self::NewOrder => 'Nouvelle commande',
            self::PendingConfirmation => 'En attente de confirmation',
            self::Confirmed => 'Confirmée',
            self::OutForDelivery => 'En cours de livraison',
            self::Delivered => 'Livrée',
            self::CancelledByCustomer => 'Annulée par le client',
            self::CancelledByShop => 'Annulée par la boutique',
            self::Returned => 'Retournée',
        };
    }
}