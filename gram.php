{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [['value' => 'lbs', 'label' => _('lbs')], ['value' => 'kgs', 'label' => _('kgs')], ['value' => 'gms', 'label' => __('grams')]];
    }
}