import React from 'react';
import NamesOfAllah from './NamesOfAllah'; // Assurez-vous d'importer le composant correctement

const App = () => {
  const names = {
    1: { id: 1, name: 'ٱلْرَّحْمَـانُ', transliteration: 'AR-RAHMAAN', meaning: 'The Most or Entirely Merciful' },
    2: { id: 2, name: 'ٱلْرَّحِيْمُ', transliteration: 'AR-RAHEEM', meaning: 'The Bestower of Mercy' },
    // Ajoutez les autres noms ici
  };

  return (
    <div>
      <NamesOfAllah names={names} />
    </div>
  );
};

export default App;
