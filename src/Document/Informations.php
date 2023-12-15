<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class Informations
{
    #[MongoDB\Field(type: 'string')]
    private string $envergure_territoriale;
    
    #[MongoDB\Field(type: 'string')]
    private string $code_insee_commune;
    
    #[MongoDB\Field(type: 'string')]
    private string $complement_d_adresse_facultatif;
    
    #[MongoDB\Field(type: 'string')]
    private string $annee_de_creation_du_festival;
    
    #[MongoDB\Field(type: 'string')]
    private string $periode_principale_de_deroulement_du_festival;
    
    #[MongoDB\Field(type: 'string')]
    private string $discipline_dominante;
    
    #[MongoDB\Field(type: 'string')]
    private string $nom_du_festival;
    
    #[MongoDB\Field(type: 'string')]
    private string $libelle_epci_collage_en_valeur;
    
    #[MongoDB\Field(type: 'string')]
    private string $commune_principale_de_deroulement;
    
    #[MongoDB\Field(type: 'string')]
    private string $region_principale_de_deroulement;
    
    #[MongoDB\Field(type: 'string')]
    private string $code_insee_epci_collage_en_valeur;
    
    #[MongoDB\Field(type: 'string')]
    private string $adresse_postale;
    
    #[MongoDB\Field(type: 'string')]
    private string $departement_principal_de_deroulement;
    
    #[MongoDB\Field(type: 'string')]
    private string $numero_de_voie;
    
    #[MongoDB\Field(type: 'string')]
    private string $identifiant;
    
    #[MongoDB\Field(type: 'string')]
    private string $code_postal_de_la_commune_principale_de_deroulement;
    
    #[MongoDB\Field(type: 'string')]
    private string $site_internet_du_festival;
    
    #[MongoDB\Field(type: 'string')]
    private string $adresse_e_mail;
    
    #[MongoDB\Field(type: 'string')]
    private string $nom_de_la_voie;
    
    #[MongoDB\Field(type: 'string')]
    private string $decennie_de_creation_du_festival;
    
    #[MongoDB\Field(type: 'string')]
    private string $sous_categorie_arts_visuels_et_arts_numeriques;

    public function getEnvergureTerritoriale(): string
    {
        return $this->envergure_territoriale;
    }

    public function setEnvergureTerritoriale(string $envergure_territoriale): self
    {
        $this->envergure_territoriale = $envergure_territoriale;

        return $this;
    }

    public function getCodeInseeCommune(): string
    {
        return $this->code_insee_commune;
    }

    public function setCodeInseeCommune(string $code_insee_commune): self
    {
        $this->code_insee_commune = $code_insee_commune;

        return $this;
    }

    public function getComplementDAdresseFacultatif(): string
    {
        return $this->complement_d_adresse_facultatif;
    }

    public function setComplementDAdresseFacultatif(string $complement_d_adresse_facultatif): self
    {
        $this->complement_d_adresse_facultatif = $complement_d_adresse_facultatif;

        return $this;
    }

    public function getAnneeDeCreationDuFestival(): string
    {
        return $this->annee_de_creation_du_festival;
    }

    public function setAnneeDeCreationDuFestival(string $annee_de_creation_du_festival): self
    {
        $this->annee_de_creation_du_festival = $annee_de_creation_du_festival;

        return $this;
    }

    public function getPeriodePrincipaleDeDeroulementDuFestival(): string
    {
        return $this->periode_principale_de_deroulement_du_festival;
    }

    public function setPeriodePrincipaleDeDeroulementDuFestival(string $periode_principale_de_deroulement_du_festival): self
    {
        $this->periode_principale_de_deroulement_du_festival = $periode_principale_de_deroulement_du_festival;

        return $this;
    }

    public function getDisciplineDominante(): string
    {
        return $this->discipline_dominante;
    }

    public function setDisciplineDominante(string $discipline_dominante): self
    {
        $this->discipline_dominante = $discipline_dominante;

        return $this;
    }

    public function getNomDuFestival(): string
    {
        return $this->nom_du_festival;
    }

    public function setNomDuFestival(string $nom_du_festival): self
    {
        $this->nom_du_festival = $nom_du_festival;

        return $this;
    }

    public function getLibelleEpciCollageEnValeur(): string
    {
        return $this->libelle_epci_collage_en_valeur;
    }

    public function setLibelleEpciCollageEnValeur(string $libelle_epci_collage_en_valeur): self
    {
        $this->libelle_epci_collage_en_valeur = $libelle_epci_collage_en_valeur;

        return $this;
    }

    public function getCommunePrincipaleDeDeroulement(): string
    {
        return $this->commune_principale_de_deroulement;
    }

    public function setCommunePrincipaleDeDeroulement(string $commune_principale_de_deroulement): self
    {
        $this->commune_principale_de_deroulement = $commune_principale_de_deroulement;

        return $this;
    }

    public function getRegionPrincipaleDeDeroulement(): string
    {
        return $this->region_principale_de_deroulement;
    }

    public function setRegionPrincipaleDeDeroulement(string $region_principale_de_deroulement): self
    {
        $this->region_principale_de_deroulement = $region_principale_de_deroulement;

        return $this;
    }

    public function getCodeInseeEpciCollageEnValeur(): string
    {
        return $this->code_insee_epci_collage_en_valeur;
    }

    public function setCodeInseeEpciCollageEnValeur(string $code_insee_epci_collage_en_valeur): self
    {
        $this->code_insee_epci_collage_en_valeur = $code_insee_epci_collage_en_valeur;

        return $this;
    }

    public function getAdressePostale(): string
    {
        return $this->adresse_postale;
    }

    public function setAdressePostale(string $adresse_postale): self
    {
        $this->adresse_postale = $adresse_postale;

        return $this;
    }

    public function getDepartementPrincipalDeDeroulement(): string
    {
        return $this->departement_principal_de_deroulement;
    }

    public function setDepartementPrincipalDeDeroulement(string $departement_principal_de_deroulement): self
    {
        $this->departement_principal_de_deroulement = $departement_principal_de_deroulement;

        return $this;
    }

    public function getNumeroDeVoie(): string
    {
        return $this->numero_de_voie;
    }

    public function setNumeroDeVoie(string $numero_de_voie): self
    {
        $this->numero_de_voie = $numero_de_voie;

        return $this;
    }

    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getCodePostalDeLaCommunePrincipaleDeDeroulement(): string
    {
        return $this->code_postal_de_la_commune_principale_de_deroulement;
    }

    public function setCodePostalDeLaCommunePrincipaleDeDeroulement(string $code_postal_de_la_commune_principale_de_deroulement): self
    {
        $this->code_postal_de_la_commune_principale_de_deroulement = $code_postal_de_la_commune_principale_de_deroulement;

        return $this;
    }

    public function getSiteInternetDuFestival(): string
    {
        return $this->site_internet_du_festival;
    }

    public function setSiteInternetDuFestival(string $site_internet_du_festival): self
    {
        $this->site_internet_du_festival = $site_internet_du_festival;

        return $this;
    }

    public function getAdresseEMail(): string
    {
        return $this->adresse_e_mail;
    }

    public function setAdresseEMail(string $adresse_e_mail): self
    {
        $this->adresse_e_mail = $adresse_e_mail;

        return $this;
    }

    public function getNomDeLaVoie(): string
    {
        return $this->nom_de_la_voie;
    }

    public function setNomDeLaVoie(string $nom_de_la_voie): self
    {
        $this->nom_de_la_voie = $nom_de_la_voie;

        return $this;
    }

    public function getDecennieDeCreationDuFestival(): string
    {
        return $this->decennie_de_creation_du_festival;
    }

    public function setDecennieDeCreationDuFestival(string $decennie_de_creation_du_festival): self
    {
        $this->decennie_de_creation_du_festival = $decennie_de_creation_du_festival;

        return $this;
    }

    public function getSousCategorieArtsVisuelsEtArtsNumeriques(): string
    {
        return $this->sous_categorie_arts_visuels_et_arts_numeriques;
    }

    public function setSousCategorieArtsVisuelsEtArtsNumeriques(string $sous_categorie_arts_visuels_et_arts_numeriques): self
    {
        $this->sous_categorie_arts_visuels_et_arts_numeriques = $sous_categorie_arts_visuels_et_arts_numeriques;

        return $this;
    }
}